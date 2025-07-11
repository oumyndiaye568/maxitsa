<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <head>
  <!-- Font Awesome 6.7.2 via CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

    <style>
        .geometric-bg {
            background: linear-gradient(135deg, #ff6b35 0%, #f7931e 50%, #ff4500 100%);
            position: relative;
            overflow: hidden;
        }
        
        .geometric-bg::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: 
                linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(255,255,255,0.1) 25%, transparent 25%),
                linear-gradient(45deg, transparent 75%, rgba(255,255,255,0.1) 75%),
                linear-gradient(-45deg, transparent 75%, rgba(255,255,255,0.1) 75%);
            background-size: 100px 100px;
            animation: float 20s ease-in-out infinite;
        }
        
        .geometric-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        
        .shape {
            position: absolute;
            opacity: 0.3;
        }
        
        .shape-1 {
            top: 10%;
            left: 20%;
            width: 150px;
            height: 150px;
            background: linear-gradient(45deg, rgba(255,255,255,0.2), rgba(0,0,0,0.1));
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation: rotate 15s linear infinite;
        }
        
        .shape-2 {
            top: 60%;
            right: 10%;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, rgba(0,0,0,0.2), rgba(255,255,255,0.1));
            border-radius: 50%;
            animation: pulse 10s ease-in-out infinite;
        }
        
        .shape-3 {
            bottom: 20%;
            left: 10%;
            width: 120px;
            height: 120px;
            background: linear-gradient(225deg, rgba(255,255,255,0.15), rgba(0,0,0,0.1));
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
            animation: float 12s ease-in-out infinite reverse;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .input-field {
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(255, 107, 53, 0.3);
            transition: all 0.3s ease;
        }
        
        .input-field:focus {
            border-color: #ff6b35;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #000000, #1a1a1a);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background: linear-gradient(135deg, #ff4500, #ff6b35);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">

<?php
echo $content
?>

</body>
</html>