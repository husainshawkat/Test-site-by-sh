<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = trim($_POST["message"]);

    if (!empty($message)) {
        $token = "7891742749:AAHRWnK8KtgV4c7KEb6MY27D9AXdIsrKp_w"; // আপনার BotFather-এর থেকে পাওয়া API টোকেন
        $chat_id = "1987016824"; // আপনার ব্যক্তিগত চ্যাট আইডি বা গ্রুপ আইডি

        $text = "📩 *নতুন বেনামী মেসেজ:*\n\n" . $message;

        $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text) . "&parse_mode=Markdown";

        // টেলিগ্রামে মেসেজ পাঠানোর অনুরোধ
        $response = file_get_contents($url);

        if ($response) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
}
?>
