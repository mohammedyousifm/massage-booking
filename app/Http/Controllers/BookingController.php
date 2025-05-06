<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Handle the form submission and store the booking.
     */
    public function store(Request $request)
    {

        try {
            // dd($request); // You can use this to debug the incoming request

            // Validate the incoming request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => ['required', 'string', 'regex:/^\+?[0-9]{10,15}$/'],  // Phone number validation
                'date' => 'required|date',   // Ensures date is a valid date
                'time' => 'required|date_format:H:i',  // Ensures time is in the correct format
                'address' => 'required|string|max:255',
                'service_type' => 'required|string|max:255',
                'car_type' => 'required|string|max:255',
            ]);



            // Create a new booking record
            $booking = Booking::create([
                'name' => $validatedData['name'],
                'number' => $validatedData['phone'],
                'date' => $validatedData['date'],
                'time' => $validatedData['time'],
                'address' => $validatedData['address'],
                'service_type' => $validatedData['service_type'],
                'car_type' => $validatedData['car_type'],
            ]);

            // Prepare the WhatsApp message
            $adminPhoneNumber = '9665XXXXXXXX'; // Admin's WhatsApp number (international format)
            $message = "🚗 Booking Alert! \n"
                . "Customer #{$booking->id} has booked.\n"
                . "Name: {$booking->name}\n"
                . "Phone: {$booking->number}\n"
                . "Service: {$booking->service_type}\n"
                . "Car: {$booking->car_type}\n"
                . "Date: {$booking->date}\n"
                . "Time: {$booking->time}\n"
                . "Address: {$booking->address}";

            // بيانات UltraMsg
            $instanceId = 'instance117851';
            $token = 'vtlqp1ceozn1hmbp';
            $adminPhone = '249918279129'; // بدون +
            $customerPhone = $booking->number; // رقم العميل

            // رسالة للإدمن
            $adminMessage = "🚗 تم استلام الحجز!\n"
                . "الاسم الكامل: {$booking->name}\n"
                . "رقم الهاتف: {$booking->number}\n"
                . "الخدمة: {$booking->service_type}\n"
                . "نوع السيارة: {$booking->car_type}\n"
                . "التاريخ: {$booking->date} الساعة {$booking->time}\n"
                . "العنوان: {$booking->address}\n\n";

            // إرسال رسالة للإدمن
            $adminResponse = Http::post("https://api.ultramsg.com/{$instanceId}/messages/chat", [
                'token' => $token,
                'to' => $adminPhone,
                'body' => $adminMessage,
            ]);

            if ($adminResponse->failed()) {
                return back()->withErrors(['error' => 'فشل إرسال إشعار الإدارة. يُرجى المحاولة مرة أخرى.']);
            }

            // رسالة للعميل
            $customerMessage = "✅ تم تأكيد حجزك بنجاح!\n"
                . "الخدمة: {$booking->service_type}\n"
                . "نوع السيارة: {$booking->car_type}\n"
                . "التاريخ: {$booking->date} الساعة {$booking->time}\n"
                . "العنوان: {$booking->address}\n\n"
                . "شكرًا لاختيارك خدماتنا! 🚗";

            // إرسال رسالة للعميل
            $customerResponse = Http::post("https://api.ultramsg.com/{$instanceId}/messages/chat", [
                'token' => $token,
                'to' => $customerPhone,
                'body' => $customerMessage,
            ]);

            if ($customerResponse->failed()) {
                return back()->withErrors(['error' => 'تم حفظ الحجز ولكن فشل في إرسال التأكيد إلى العميل.']);
            }

            // Redirect with a success message
            return redirect()->route('successBooking');
        } catch (\Exception $e) {
            // Handle any errors that occur during validation or booking creation

            // Optionally log the error for debugging
            Log::error("Error creating booking: " . $e->getMessage());

            // Return back with an error message
            return back()->withErrors(['error' => 'حدث خطأ أثناء معالجة حجزك. يُرجى المحاولة مرة أخرى.']);
        }
    }
}
