<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: center;
            background-image: url('/images/background.jpg'); 
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            max-width: 350px;
            width: 100%;
            /* margin: 40px auto; */
            /* background: #ffffff2e; */
            background-color: rgba(51, 44, 44, 0.81);
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            padding: 32px 24px 24px 24px;
            text-align: center;
        }
        .profile-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            background: #eee;
            margin: 0 auto 24px auto;
            display: block;
        }
        .info-box {
            background: #ed70b7ff;
            border-radius: 5px;
            padding: 12px;
            margin-bottom: 16px;
            font-size: 16px;
            display: flex;
            flex-direction: row;     
            align-items: center;      
            justify-content: center;  
            text-align: center;
            max-width: 200px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        .info-label {
            font-weight: bold;
            margin-right: 8px;
            text-align: center;
            font-size: 16px;
        }
        .info-value {
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="/images/profile.jpg" alt="Profile" class="profile-img">
        
        <div class="info-box">
            <span class="info-label">Nama:</span>
            <span class="info-value">{{ $nama }}</span>
        </div>
        <div class="info-box">
            <span class="info-label">Kelas:</span>
            <span class="info-value">{{ $kelas }}</span>
        </div>
        <div class="info-box">
            <span class="info-label">NPM:</span>
            <span class="info-value">{{ $npm }}</span>
        </div>
    </div>
</body>
</html>