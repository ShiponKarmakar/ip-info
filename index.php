<?php
if ( file_exists(__DIR__.'/config.php') ){
    require(__DIR__.'/config.php');
}

if ( file_exists( __DIR__.'/includes/ip-info-class.php' ) ){
    require( __DIR__.'/includes/ip-info-class.php' );
}

// Your IPinfo access token
$ipinfo = new IPinfo($access_token);

$current_ip = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['submit'])) {
    $ip = $_POST['ip'];
} else {
    $ip = $current_ip;
}

$details = $ipinfo->getIPDetails($ip);
?>

<!DOCTYPE html>
<html>
<head>
    <title>IP Address Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
</head>
<body class="bg-gray-200">
    <div class="max-w-md mx-auto">
        <img src="https://univahost.com/assets/images/logo.png" alt="UnivaHost">
        <br/>
        <form action="" method="post" class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-medium mb-4">IP Address Details</h2>
            <div class="mb-4">
                <label for="ip" class="block text-gray-700 font-medium mb-2">IP Address</label>
                <input type="text" name="ip" id="ip" class="border border-gray-400 p-2 w-full" value="<?php echo $ip; ?>">
            </div>
            <div class="mb-4">
                <button type="submit" name="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Submit</button>
            </div>
        </form>
        <br/>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p>Your Current IP: <span id="current_ip"><?php echo $current_ip; ?></span> 
            <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600"  onclick="copyToClipboard()">Copy to clipboard</button></p>
            <p>IP: <?php echo $details->ip; ?></p>
            <p>City: <?php echo $details->city; ?></p>
            <p>Region: <?php echo $details->region; ?></p>
            <p>Country: <?php echo $details->country; ?></p>
            <p>Location: <?php echo $details->loc; ?></p>
            <p>Organization: <?php echo $details->org; ?></p>
            <p>Postal: <?php echo $details->postal; ?></p>
            <p>Hostname: <?php echo $details->hostname; ?></p>
            <iframe
  width="100%"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=<?php echo $google_map_api_key.$details->loc; ?>" allowfullscreen>
</iframe>
        </div>
    </div>
    <script>
    function copyToClipboard() {
        var current_ip = document.getElementById("current_ip").innerHTML;
        var textArea = document.createElement("textarea");
        textArea.value = current_ip;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("Copy");
        textArea.remove();
        alert("Copied the text: " + current_ip);
    }
    </script>
</body>
</html>

