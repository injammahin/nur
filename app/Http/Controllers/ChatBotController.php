<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function index()
    {
        return view('chatbot');
    }

    public function handle(Request $request)
    {
        $userMessage = $request->input('message');
        $response = $this->generateResponse($userMessage);

        return response()->json(['message' => $response]);
    }

    private function generateResponse($input)
    {
        $input = strtolower($input);

        if (strpos($input, 'hi') !== false || strpos($input, 'hello') !== false) {
            return 'Hello! How can I assist you today?';
        } elseif (strpos($input, 'bye') !== false) {
            return 'Goodbye! Have a great day!';
        } elseif (strpos($input, 'thank you') !== false || strpos($input, 'thanks') !== false) {
            return 'You\'re welcome! Anything else you need help with?';
        } elseif (strpos($input, 'how are you') !== false) {
            return 'I\'m just a bot, but I\'m here to help! How can I assist you?';
        } elseif (strpos($input, 'no') !== false) {
            return 'Okay, if you need anything else, feel free to ask!';
        } elseif (strpos($input, 'good job') !== false || strpos($input, 'well done') !== false) {
            return 'Thank you! I\'m here to assist you. What else can I do for you?';
        } elseif (strpos($input, 'suggest a book') !== false) {
            return 'I suggest "To Kill a Mockingbird" by Harper Lee. It\'s a great read!';
        } elseif (strpos($input, 'suggest a song') !== false) {
            return 'How about "Shape of You" by Ed Sheeran? It\'s quite popular!';
        } elseif (strpos($input, 'tell me a joke') !== false) {
            return 'Why don’t scientists trust atoms? Because they make up everything!';
        } elseif (strpos($input, 'what is ambala it') !== false || strpos($input, 'about ambala it') !== false) {
            return 'Ambala IT is a technology solutions provider offering a range of services including software development, IT consultancy, and digital marketing. For more information, visit our website: https://www.ambalait.com/';
        } elseif (strpos($input, 'founder of ambala it') !== false || strpos($input, 'who founded ambala it') !== false) {
            return 'The founder of Ambala IT is Arif Sikdar. For more details, visit our website: https://www.ambalait.com/';
        } elseif (strpos($input, 'services of ambala it') !== false || strpos($input, 'what services does ambala it provide') !== false) {
            return $this->servicesInfo();
        } elseif (strpos($input, 'software') !== false) {
            return $this->softwareInfo();
        } elseif (strpos($input, 'bulk sms') !== false) {
            return $this->bulkSmsInfo();
        } elseif (strpos($input, 'ecommerce') !== false) {
            return $this->ecommerceInfo();
        } elseif (strpos($input, 'school management') !== false) {
            return $this->schoolManagementInfo();
        } elseif (strpos($input, 'retail management') !== false) {
            return $this->retailManagementInfo();
        } elseif (strpos($input, 'accounting') !== false) {
            return $this->accountingInfo();
        } elseif (strpos($input, 'fixed assets') !== false) {
            return $this->fixedAssetsInfo();
        } elseif (strpos($input, 'inventory management') !== false) {
            return $this->inventoryManagementInfo();
        } else {
            return 'I\'m not quite sure how to answer that. Could you please provide more details or ask about something else? For more information, you can visit our website: https://www.ambalait.com/';
        }
    }

    private function softwareInfo()
    {
        return "Ambala IT provides several types of software solutions, including enterprise resource planning (ERP), customer relationship management (CRM), and more. Each has powerful features designed to streamline your business processes. Which software type interests you?";
    }

    private function servicesInfo()
    {
        return "We offer a variety of services including web development, app development, graphic design, e-commerce solutions, and IT consultancy. Which one would you like to know more about?";
    }

    private function bulkSmsInfo()
    {
        return "Our Bulk SMS Service offers solutions for businesses and individuals, including masking and non-masking SMS, targeted campaigns, and real-time dashboards. We provide a platform to send SMS directly from Excel, schedule messages, and track history. How can we help you with Bulk SMS?";
    }

    private function ecommerceInfo()
    {
        return "We develop e-commerce websites for B2B, B2C, C2C, and C2B models. Our platforms are dynamic, user-friendly, and feature-rich, ensuring a seamless shopping experience across devices. From concept to completion, we ensure your website is secure, up-to-date, and optimized for success. What specific e-commerce feature are you interested in?";
    }

    private function schoolManagementInfo()
    {
        return "Shikha Plus is our complete School Management System designed to streamline administrative and academic operations. It includes student management, attendance tracking, grade management, timetable scheduling, communication tools, fee management, library management, and HR management. What would you like to know more about?";
    }

    private function retailManagementInfo()
    {
        return "KarbariPlus is our Retail Management System with features like real-time dashboards, product management, barcode management, stock management, payment management, and more. It's adaptable for various retail businesses, improving stock positions, profits, and customer service. What specific aspect are you interested in?";
    }

    private function accountingInfo()
    {
        return "Koriyal Plus is our Accounting Software that integrates project-based accounting, dynamic chart of accounts, multi-currency support, and more. It provides extensive reporting and strong web application security. How can I assist you further with accounting software?";
    }

    private function fixedAssetsInfo()
    {
        return "Our Fixed Assets Management software helps in asset tracking, depreciation management, maintenance scheduling, audit trails, and integration with accounting systems. It optimizes asset utilization and ensures compliance with regulatory standards. What details would you like to know?";
    }

    private function inventoryManagementInfo()
    {
        return "Our Inventory Management software optimizes processes from procurement to fulfillment, with features like inventory tracking, real-time updates, order management, barcode integration, and multi-channel integration. It supports data-driven decision-making with detailed reports. What specific inventory feature are you interested in?";
    }
}
