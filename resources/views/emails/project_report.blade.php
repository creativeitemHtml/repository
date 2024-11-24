<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creativeitem.com | Project </title>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap" rel="stylesheet"> 
</head>
<body style="margin:0; padding:0; font-family: 'Cabin', sans-serif;">
    <div class="email-container" style="background-color: #fff;">
        <table class="table-content" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; padding: 45px 30px 34px 30px ;  margin: auto; width: 600px;">
            <tbody>
                <tr>
                    <td>
                        <div class="inner-content">
                           <div class="inner-content-top">
                                 <!-- Logo -->
                                <div style="text-align:center;" >
                                    <a style="text-align:center; text-decoration: none; display: inline-block; width: 100%; text-align: center;" href="https://creativeitem.com"><img style="width:150px; margin: auto;" src="https://creativeitem.com/public/assets/image/logo-2.png" alt="logo image"></a>
                                </div>
                                <div class="feature-item" style="margin-top:37px; ">
                                    <div class="feature-text" style="margin-bottom:27px; margin-top:0;">
                                    <p style="margin-bottom:20px; margin-top: 0; color:#0C141D; font-size: 24px; font-weight:600">Hello {{ $user->name }}, Your project has been created</p>
                                    <p style="font-size: 17px; color: #0C141D; font-weight: 400; margin: 30px 0; "><strong style="color: #000;">Project Title:</strong> {{ $project_details->title }}</p>
                                    <p><strong style="color: #000;">Project Description:</strong> {!! $project_details->description !!}</p>
                                    </div>
                                    <a href="{{ $route }}" target="_blank" style=" text-decoration: none; background-color:#007BFF; border-radius:10px;display:inline-block; padding:14px 19px; color: #FFFFFF;">Click here to check project</a>
                                </div>
                           </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Thank you for choosing us.</p>
                    </td>
                </tr>

                <tr>
                    <td style="font-size: 13px; text-align:center; padding: 0 10px 10px 10px; font-weight: 500; color: #A1A5B7; font-family:Arial,Helvetica,sans-serif">
                        <p style="color:#181C32; font-size: 16px; font-weight: 600; margin-bottom:9px">It’s all about customers!</p>
                        <p style="margin-bottom:2px; font-family:Arial,Helvetica,sans-serif">Message in WhatsApp: <a href="https://wa.link/izd8dl">https://wa.link/izd8dl</a></p>
                        <p style="margin-bottom:4px; font-family:Arial,Helvetica,sans-serif">You may reach us at <a href="https://support.creativeitem.com" rel="noopener" target="_blank" style="text-decoration:none; font-weight: 600; font-family:Arial,Helvetica,sans-serif">https://support.creativeitem.com</a>.</p>
                        <p>We serve Sun-Thus, 10AM- 6PM</p>                                
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center; padding-bottom: 20px;">                                
                        <a href="https://bd.linkedin.com/company/creativeitem" style=" text-decoration: none; margin-right:10px"><img alt="Logo" src="https://creativeitem.com/public/assets/image/icon-linkedin.png"></a>    
                        <a href="https://www.instagram.com/creativeitem.developers/" style=" text-decoration: none; margin-right:10px"><img alt="Logo" src="https://creativeitem.com/public/assets/image/icon-instagram.png"></a>    
                        <a href="https://www.facebook.com/CreativeitemApps/" style=" text-decoration: none; margin-right:10px"><img alt="Logo" src="https://creativeitem.com/public/assets/image/icon-facebook.png"></a>   
                        <a href="https://twitter.com/creativeitem" style=" text-decoration: none; margin-right:10px"><img alt="Logo" src="https://creativeitem.com/public/assets/image/icon-twitter.png"></a> 
                        <a href="https://www.youtube.com/@Creativeitem" style=" text-decoration: none;"><img alt="Logo" src="https://creativeitem.com/public/assets/image/icon-youtube.png"></a>                           
                    </td>
                </tr>
                <tr>
                    <td style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500; color: #A1A5B7;font-family:Arial,Helvetica,sans-serif">                            
                      <p> © Copyright creativeitem.</p>                         
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>    