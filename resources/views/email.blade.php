<div style="background-color: #eeeeef; padding: 50px 0; " wfd-id="168">
    <div style="max-width:640px; margin:0 auto; " wfd-id="169">
        <div style="color: #fff; text-align: center; background-color:#33333e; padding: 30px; border-top-left-radius: 3px; border-top-right-radius: 3px; margin: 0;" wfd-id="173">
            <h3>{{env('APP_NAME')}} Contact Form
            	<br>
            	<small>Made in Laravel | Coded by icrewsystems</small>
            </h3>
        </div>
        <div style="padding: 20px; background-color: rgb(255, 255, 255);" wfd-id="170">
            <p style="color: rgb(85, 85, 85); font-size: 14px;">New message received from <b>{{ $name }}</b></p>
            <p style="color: rgb(85, 85, 85); font-size: 14px;">Message: {{ $usermessage }}</p>
            <hr>
            <p style="color: rgb(85, 85, 85); font-size: 14px;">Please contact this user at:&nbsp;<a href="{{$email}}" target="_blank">{{ $email }}</a></p>
            <p style="color: rgb(85, 85, 85); font-size: 14px;"></p>

            <p style="color: rgb(85, 85, 85); font-size: 14px;">
            	This message was generated at <?php echo date("H:i:s, d-m-Y"); ?> | {{ config('app.name') }}
            </p>
        </div>
    </div>
</div>
