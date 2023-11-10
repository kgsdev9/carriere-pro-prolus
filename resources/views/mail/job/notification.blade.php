{{-- 
<x-mail::message>
	# IntroductionThe body of your message.
	<x-mail::button :url="''">
		Button Text
	</x-mail::button>
	Thanks,
	<br>
	{{ config('app.name') }}
</x-mail::message>
 --}}
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
     <head>
         <meta charset="UTF-8">
         <meta content="width=device-width, initial-scale=1" name="viewport">
         <meta name="x-apple-disable-message-reformatting">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta content="telephone=no" name="format-detection">
         <title></title>
         <style>
             /* CONFIG STYLES Please do not delete and edit CSS styles below */
             /* IMPORTANT THIS STYLES MUST BE ON FINAL EMAIL */
             .rollover div
             {
                 font-size: 0;
             }
 
             .section-title
             {
                 padding: 10px 15px;
                 background-color: #f6f6f6;
                 border: 1px solid #dfdfdf;
                 outline: 0;
                 border-radius: 8px;
                 margin-bottom: 15px;
             }
 
             #outlook a
             {
                 padding: 0;
             }
 
             .ExternalClass
             {
                 width: 100%;
             }
 
             .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div
             {
                 line-height: 100%;
             }
 
             .es-button
             {
                 mso-style-priority: 100 !important;
                 text-decoration: none !important;
             }
 
             a[x-apple-data-detectors]
             {
                 color: inherit !important;
                 text-decoration: none !important;
                 font-size: inherit !important;
                 font-family: inherit !important;
                 font-weight: inherit !important;
                 line-height: inherit !important;
             }
 
             .es-desk-hidden
             {
                 display: none;
                 float: left;
                 overflow: hidden;
                 width: 0;
                 max-height: 0;
                 line-height: 0;
                 mso-hide: all;
             }
 
             /*END OF IMPORTANT*/
             s
             {
                 text-decoration: line-through;
             }
 
             html,body
             {
                 width: 100%;
                 -webkit-text-size-adjust: 100%;
                 -ms-text-size-adjust: 100%;
             }
 
             body
             {
                 font-family: arial, 'helvetica neue', helvetica, sans-serif;
             }
 
             table
             {
                 mso-table-lspace: 0pt;
                 mso-table-rspace: 0pt;
                 border-collapse: collapse;
                 border-spacing: 0px;
             }
 
             table td,html,body,.es-wrapper
             {
                 padding: 0;
                 Margin: 0;
             }
 
             .es-content,.es-header,.es-footer
             {
                 table-layout: fixed !important;
                 width: 100%;
             }
 
             img
             {
                 display: block;
                 border: 0;
                 outline: none;
                 text-decoration: none;
                 -ms-interpolation-mode: bicubic;
             }
 
             table tr
             {
                 border-collapse: collapse;
             }
 
             p,hr
             {
                 Margin: 0;
             }
 
             h1,h2,h3,h4,h5,h6
             {
                 Margin: 0;
                 line-height: 120%;
                 mso-line-height-rule: exactly;
                 font-family: 'Arial Narrow', Arial, sans-serif;
                 letter-spacing: 0.5px;
             }
 
             p,ul li,ol li,a
             {
                 -webkit-text-size-adjust: none;
                 -ms-text-size-adjust: none;
                 mso-line-height-rule: exactly;
             }
 
             .es-left
             {
                 float: left;
             }
 
             .es-right
             {
                 float: right;
             }
 
             .es-p5
             {
                 padding: 5px;
             }
 
             .es-p5t
             {
                 padding-top: 5px;
             }
 
             .es-p5b
             {
                 padding-bottom: 5px;
             }
 
             .es-p5l
             {
                 padding-left: 5px;
             }
 
             .es-p5r
             {
                 padding-right: 5px;
             }
 
             .es-p10
             {
                 padding: 10px;
             }
 
             .es-p10t
             {
                 padding-top: 10px;
             }
 
             .es-p10b
             {
                 padding-bottom: 10px;
             }
 
             .es-p10l
             {
                 padding-left: 10px;
             }
 
             .es-p10r
             {
                 padding-right: 10px;
             }
 
             .es-p15
             {
                 padding: 15px;
             }
 
             .es-p15t
             {
                 padding-top: 15px;
             }
 
             .es-p15b
             {
                 padding-bottom: 15px;
             }
 
             .es-p15l
             {
                 padding-left: 15px;
             }
 
             .es-p15r
             {
                 padding-right: 15px;
             }
 
             .es-p20
             {
                 padding: 20px;
             }
 
             .es-p20t
             {
                 padding-top: 20px;
             }
 
             .es-p20b
             {
                 padding-bottom: 20px;
             }
 
             .es-p20l
             {
                 padding-left: 20px;
             }
 
             .es-p20r
             {
                 padding-right: 20px;
             }
 
             .es-p25
             {
                 padding: 25px;
             }
 
             .es-p25t
             {
                 padding-top: 25px;
             }
 
             .es-p25b
             {
                 padding-bottom: 25px;
             }
 
             .es-p25l
             {
                 padding-left: 25px;
             }
 
             .es-p25r
             {
                 padding-right: 25px;
             }
 
             .es-p30
             {
                 padding: 30px;
             }
 
             .es-p30t
             {
                 padding-top: 30px;
             }
 
             .es-p30b
             {
                 padding-bottom: 30px;
             }
 
             .es-p30l
             {
                 padding-left: 30px;
             }
 
             .es-p30r
             {
                 padding-right: 30px;
             }
 
             .es-p35
             {
                 padding: 35px;
             }
 
             .es-p35t
             {
                 padding-top: 35px;
             }
 
             .es-p35b
             {
                 padding-bottom: 35px;
             }
 
             .es-p35l
             {
                 padding-left: 35px;
             }
 
             .es-p35r
             {
                 padding-right: 35px;
             }
 
             .es-p40
             {
                 padding: 40px;
             }
 
             .es-p40t
             {
                 padding-top: 40px;
             }
 
             .es-p40b
             {
                 padding-bottom: 40px;
             }
 
             .es-p40l
             {
                 padding-left: 40px;
             }
 
             .es-p40r
             {
                 padding-right: 40px;
             }
 
             .es-menu td
             {
                 border: 0;
             }
 
             .es-menu td a img
             {
                 display: inline-block !important;
             }
 
             /* END CONFIG STYLES */
             a
             {
                 text-decoration: underline;
             }
 
             .es-footer h3 a,h3 a
             {
                 font-size: 20px;
             }
 
             h5
             {
                 font-size: 16px;
                 font-weight: 300;
                 color: #999999;
                 line-height: 22px;
             }
 
             h5 a
             {
                 font-size: 16px;
             }
 
             p,ul li,ol li
             {
                 font-family: arial, 'helvetica neue', helvetica, sans-serif;
                 line-height: 150%;
             }
 
             ul li,ol li
             {
                 Margin-bottom: 15px;
                 margin-left: 0;
             }
 
             .es-menu td a
             {
                 text-decoration: none;
                 display: block;
                 font-family: arial, 'helvetica neue', helvetica, sans-serif;
             }
 
             .es-wrapper
             {
                 width: 100%;
                 height: 100%;
                 background-repeat: repeat;
                 background-position: center top;
             }
 
             .es-wrapper-color,.es-wrapper
             {
                 background-color: #f0f0f0;
             }
 
             .es-header
             {
                 background-color: transparent;
                 background-repeat: repeat;
                 background-position: center top;
             }
 
             .es-header-body
             {
                 background-color: #ffffff;
             }
 
             .es-header-body p,.es-header-body ul li,.es-header-body ol li
             {
                 color: #333333;
                 font-size: 12px;
             }
 
             .es-header-body a
             {
                 color: #0081ff;
                 font-size: 12px;
             }
 
             .es-content-body
             {
                 background-color: #ffffff;
             }
 
             .es-content-body p,.es-content-body ul li,.es-content-body ol li
             {
                 color: #999999;
                 font-size: 14px;
             }
 
             .es-content-body a
             {
                 color: #0081ff;
                 font-size: 14px;
             }
 
             .es-footer
             {
                 background-color: transparent;
                 background-repeat: repeat;
                 background-position: center top;
             }
 
             .es-footer-body
             {
                 background-color: #ffffff;
             }
 
             .es-footer-body p,.es-footer-body ul li,.es-footer-body ol li
             {
                 color: #333333;
                 font-size: 12px;
             }
 
             .es-footer-body a
             {
                 color: #333333;
                 font-size: 12px;
             }
 
             .es-infoblock,.es-infoblock p,.es-infoblock ul li,.es-infoblock ol li
             {
                 line-height: 120%;
                 font-size: 12px;
                 color: #666666;
             }
 
             .es-infoblock a
             {
                 font-size: 12px;
                 color: #333333;
             }
 
             h1
             {
                 font-size: 28px;
                 font-style: normal;
                 font-weight: normal;
                 color: #333333;
             }
 
             h2
             {
                 font-size: 24px;
                 font-style: normal;
                 font-weight: normal;
                 color: #333333;
             }
 
             h3
             {
                 font-size: 18px;
                 font-style: normal;
                 font-weight: normal;
                 color: #333333;
             }
 
             .es-header-body h1 a,.es-content-body h1 a,.es-footer-body h1 a
             {
                 font-size: 28px;
             }
 
             .es-header-body h2 a,.es-content-body h2 a,.es-footer-body h2 a
             {
                 font-size: 24px;
             }
 
             .es-header-body h3 a,.es-content-body h3 a,.es-footer-body h3 a
             {
                 font-size: 18px;
             }
 
             a.es-button,button.es-button
             {
                 padding: 15px 30px 15px 30px;
                 display: inline-block;
                 background: #0081ff;
                 border-radius: 12px;
                 font-size: 14px;
                 font-family: arial, 'helvetica neue', helvetica, sans-serif;
                 font-weight: bold;
                 font-style: normal;
                 line-height: 120%;
                 color: #ffffff;
                 text-decoration: none;
                 width: auto;
                 text-align: center;
                 mso-padding-alt: 0;
                 mso-border-alt: 10px solid #0081ff;
             }
 
             .es-button-border
             {
                 border-style: solid solid solid solid;
                 border-color: #0081ff #0081ff #0081ff #0081ff;
                 background: #0081ff;
                 border-width: 2px 2px 2px 2px;
                 display: inline-block;
                 border-radius: 12px;
                 width: auto;
                 letter-spacing: 0.5px;
             }
 
             .es-button img
             {
                 display: inline-block;
                 vertical-align: middle;
             }
 
             .msohide
             {
                 mso-hide: all;
             }
 
             /* RESPONSIVE STYLES Please do not delete and edit CSS styles below. If you don't need responsive layout, please delete this section. */
             @media only screen and (max-width: 600px)
             {
                 p,ul li,ol li,a
                 {
                     line-height: 150% !important;
                 }
 
                 h1,h2,h3,h1 a,h2 a,h3 a
                 {
                     line-height: 120%;
                 }
 
                 h1
                 {
                     font-size: 26px !important;
                     text-align: left;
                 }
 
                 h2
                 {
                     font-size: 22px !important;
                     text-align: left;
                 }
 
                 h3
                 {
                     font-size: 18px !important;
                     text-align: left;
                 }
 
                 h1 a
                 {
                     text-align: left;
                 }
 
                 .es-header-body h1 a,.es-content-body h1 a,.es-footer-body h1 a
                 {
                     font-size: 26px !important;
                 }
 
                 h2 a
                 {
                     text-align: left;
                 }
 
                 .es-header-body h2 a,.es-content-body h2 a,.es-footer-body h2 a
                 {
                     font-size: 22px !important;
                 }
 
                 h3 a
                 {
                     text-align: left;
                 }
 
                 .es-header-body h3 a,.es-content-body h3 a,.es-footer-body h3 a
                 {
                     font-size: 18px !important;
                 }
 
                 .es-menu td a
                 {
                     font-size: 12px !important;
                 }
 
                 .es-header-body p,.es-header-body ul li,.es-header-body ol li,.es-header-body a
                 {
                     font-size: 12px !important;
                 }
 
                 .es-content-body p,.es-content-body ul li,.es-content-body ol li,.es-content-body a
                 {
                     font-size: 14px !important;
                 }
 
                 .es-footer-body p,.es-footer-body ul li,.es-footer-body ol li,.es-footer-body a
                 {
                     font-size: 12px !important;
                 }
 
                 .es-infoblock p,.es-infoblock ul li,.es-infoblock ol li,.es-infoblock a
                 {
                     font-size: 12px !important;
                 }
 
                 *[class="gmail-fix"]
                 {
                     display: none !important;
                 }
 
                 .es-m-txt-c,.es-m-txt-c h1,.es-m-txt-c h2,.es-m-txt-c h3
                 {
                     text-align: center !important;
                 }
 
                 .es-m-txt-r,.es-m-txt-r h1,.es-m-txt-r h2,.es-m-txt-r h3
                 {
                     text-align: right !important;
                 }
 
                 .es-m-txt-l,.es-m-txt-l h1,.es-m-txt-l h2,.es-m-txt-l h3
                 {
                     text-align: left !important;
                 }
 
                 .es-m-txt-r img,.es-m-txt-c img,.es-m-txt-l img
                 {
                     display: inline !important;
                 }
 
                 .es-button-border
                 {
                     display: inline-block !important;
                 }
 
                 a.es-button,button.es-button
                 {
                     font-size: 12px !important;
                     display: inline-block !important;
                 }
 
                 .es-btn-fw
                 {
                     border-width: 10px 0px !important;
                     text-align: center !important;
                 }
 
                 .es-adaptive table,.es-btn-fw,.es-btn-fw-brdr,.es-left,.es-right
                 {
                     width: 100% !important;
                 }
 
                 .es-content table,.es-header table,.es-footer table,.es-content,.es-footer,.es-header
                 {
                     width: 100% !important;
                     max-width: 600px !important;
                 }
 
                 .es-adapt-td
                 {
                     display: block !important;
                     width: 100% !important;
                 }
 
                 .adapt-img
                 {
                     width: 100% !important;
                     height: auto !important;
                 }
 
                 .es-m-p0
                 {
                     padding: 0 !important;
                 }
 
                 .es-m-p0r
                 {
                     padding-right: 0 !important;
                 }
 
                 .es-m-p0l
                 {
                     padding-left: 0 !important;
                 }
 
                 .es-m-p0t
                 {
                     padding-top: 0 !important;
                 }
 
                 .es-m-p0b
                 {
                     padding-bottom: 0 !important;
                 }
 
                 .es-m-p20b
                 {
                     padding-bottom: 20px !important;
                 }
 
                 .es-mobile-hidden,.es-hidden
                 {
                     display: none !important;
                 }
 
                 tr.es-desk-hidden,td.es-desk-hidden,table.es-desk-hidden
                 {
                     width: auto !important;
                     overflow: visible !important;
                     float: none !important;
                     max-height: inherit !important;
                     line-height: inherit !important;
                 }
 
                 tr.es-desk-hidden
                 {
                     display: table-row !important;
                 }
 
                 table.es-desk-hidden
                 {
                     display: table !important;
                 }
 
                 td.es-desk-menu-hidden
                 {
                     display: table-cell !important;
                 }
 
                 table.es-table-not-adapt,.esd-block-html table
                 {
                     width: auto !important;
                 }
 
                 table.es-social
                 {
                     display: inline-block !important;
                 }
 
                 table.es-social td
                 {
                     display: inline-block !important;
                 }
 
                 .es-m-p5
                 {
                     padding: 5px !important;
                 }
 
                 .es-m-p5t
                 {
                     padding-top: 5px !important;
                 }
 
                 .es-m-p5b
                 {
                     padding-bottom: 5px !important;
                 }
 
                 .es-m-p5r
                 {
                     padding-right: 5px !important;
                 }
 
                 .es-m-p5l
                 {
                     padding-left: 5px !important;
                 }
 
                 .es-m-p10
                 {
                     padding: 10px !important;
                 }
 
                 .es-m-p10t
                 {
                     padding-top: 10px !important;
                 }
 
                 .es-m-p10b
                 {
                     padding-bottom: 10px !important;
                 }
 
                 .es-m-p10r
                 {
                     padding-right: 10px !important;
                 }
 
                 .es-m-p10l
                 {
                     padding-left: 10px !important;
                 }
 
                 .es-m-p15
                 {
                     padding: 15px !important;
                 }
 
                 .es-m-p15t
                 {
                     padding-top: 15px !important;
                 }
 
                 .es-m-p15b
                 {
                     padding-bottom: 15px !important;
                 }
 
                 .es-m-p15r
                 {
                     padding-right: 15px !important;
                 }
 
                 .es-m-p15l
                 {
                     padding-left: 15px !important;
                 }
 
                 .es-m-p20
                 {
                     padding: 20px !important;
                 }
 
                 .es-m-p20t
                 {
                     padding-top: 20px !important;
                 }
 
                 .es-m-p20r
                 {
                     padding-right: 20px !important;
                 }
 
                 .es-m-p20l
                 {
                     padding-left: 20px !important;
                 }
 
                 .es-m-p25
                 {
                     padding: 25px !important;
                 }
 
                 .es-m-p25t
                 {
                     padding-top: 25px !important;
                 }
 
                 .es-m-p25b
                 {
                     padding-bottom: 25px !important;
                 }
 
                 .es-m-p25r
                 {
                     padding-right: 25px !important;
                 }
 
                 .es-m-p25l
                 {
                     padding-left: 25px !important;
                 }
 
                 .es-m-p30
                 {
                     padding: 30px !important;
                 }
 
                 .es-m-p30t
                 {
                     padding-top: 30px !important;
                 }
 
                 .es-m-p30b
                 {
                     padding-bottom: 30px !important;
                 }
 
                 .es-m-p30r
                 {
                     padding-right: 30px !important;
                 }
 
                 .es-m-p30l
                 {
                     padding-left: 30px !important;
                 }
 
                 .es-m-p35
                 {
                     padding: 35px !important;
                 }
 
                 .es-m-p35t
                 {
                     padding-top: 35px !important;
                 }
 
                 .es-m-p35b
                 {
                     padding-bottom: 35px !important;
                 }
 
                 .es-m-p35r
                 {
                     padding-right: 35px !important;
                 }
 
                 .es-m-p35l
                 {
                     padding-left: 35px !important;
                 }
 
                 .es-m-p40
                 {
                     padding: 40px !important;
                 }
 
                 .es-m-p40t
                 {
                     padding-top: 40px !important;
                 }
 
                 .es-m-p40b
                 {
                     padding-bottom: 40px !important;
                 }
 
                 .es-m-p40r
                 {
                     padding-right: 40px !important;
                 }
 
                 .es-m-p40l
                 {
                     padding-left: 40px !important;
                 }
 
                 .es-desk-hidden
                 {
                     display: table-row !important;
                     width: auto !important;
                     overflow: visible !important;
                     max-height: inherit !important;
                 }
             }
 
             /* END RESPONSIVE STYLES */
             .es-p-default
             {
                 padding-top: 30px;
                 padding-right: 15px;
                 padding-bottom: 0px;
                 padding-left: 15px;
             }
 
             .es-p-all-default
             {
                 padding: 0px;
             }
 
             h1,h2,h3,h4,h5
             {
                 font-family: 'Arial Narrow', Arial, sans-serif;
             }
         </style>
     </head>
     <body>
         <div class="es-wrapper-color">
             <!--[if gte mso 9]>
             <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                 <v:fill type="tile" color="#f0f0f0"></v:fill>
             </v:background>
             <![endif]-->
             <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
                 <tbody>
                     <tr>
                         <td class="esd-email-paddings" valign="top">
                             <table cellpadding="0" cellspacing="0" class="es-content esd-header-popover" align="center">
                                 <tbody>
                                     <tr>
                                         <td class="esd-stripe" align="center">
                                             <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                 <tbody>
                                                     <tr>
                                                         <td class="esd-structure es-p15t es-p15b es-p30r es-p30l" align="left">
                                                             <!--[if mso]>
                                                             <table width="540" cellpadding="0" cellspacing="0">
                                                                 <tr>
                                                                     <td width="257" valign="top">
                                                                         <![endif]-->
                                                                         <table cellpadding="0" cellspacing="0" align="left" class="es-left">
                                                                             <tbody>
                                                                                 <tr>
                                                                                     <td width="257" class="esd-container-frame" align="center" valign="top">
                                                                                         <table cellpadding="0" cellspacing="0" width="100%">
                                                                                             <tbody>
                                                                                                 <tr>
                                                                                                     <td align="left" class="esd-block-text es-infoblock es-m-txt-c">
                                                                                                         <p>
                                                                                                             <font style="vertical-align: inherit;">
                                                                                                                 <font style="vertical-align: inherit;">
                                                                                                                     Mettez votre texte de pré-en-tête ici
                                                                                                                 </font>
                                                                                                             </font>
                                                                                                         </p>
                                                                                                     </td>
                                                                                                 </tr>
                                                                                             </tbody>
                                                                                         </table>
                                                                                     </td>
                                                                                 </tr>
                                                                             </tbody>
                                                                         </table>
                                                                         <!--[if mso]>
                                                                     </td>
                                                                     <td width="20"></td>
                                                                     <td width="263" valign="top">
                                                                         <![endif]-->
                                                                         <table cellpadding="0" cellspacing="0" class="es-right" align="right">
                                                                             <tbody>
                                                                                 <tr>
                                                                                     <td width="263" align="left" class="esd-container-frame">
                                                                                         <table cellpadding="0" cellspacing="0" width="100%">
                                                                                             <tbody>
                                                                                                 <tr>
                                                                                                     <td align="right" class="esd-block-text es-infoblock es-m-txt-c">
                                                                                                         <p>
                                                                                                             <a target="_blank" class="view" href="https://viewstripo.email">
                                                                                                                 <font style="vertical-align: inherit;">
                                                                                                                     <font style="vertical-align: inherit;">
                                                                                                                         Voir en ligne
                                                                                                                     </font>
                                                                                                                 </font>
                                                                                                             </a>
                                                                                                         </p>
                                                                                                     </td>
                                                                                                 </tr>
                                                                                             </tbody>
                                                                                         </table>
                                                                                     </td>
                                                                                 </tr>
                                                                             </tbody>
                                                                         </table>
                                                                         <!--[if mso]>
                                                                     </td>
                                                                 </tr>
                                                             </table>
                                                             <![endif]-->
                                                         </td>
                                                     </tr>
                                                 </tbody>
                                             </table>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                             <table cellpadding="0" cellspacing="0" class="es-header" align="center">
                                 <tbody>
                                     <tr>
                                         <td class="esd-stripe" align="center">
                                             <table class="es-header-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#333333" align="center" style="border-bottom:1px solid #efefef;background-color: #333333;">
                                                 <tbody>
                                                     <tr>
                                                         <td class="esd-structure es-p20t es-p20b es-p30r es-p30l" align="left" bgcolor="#ffffff" style="background-color: #ffffff;">
                                                             <!--[if mso]>
                                                             <table width="540" cellpadding="0" cellspacing="0">
                                                                 <tr>
                                                                     <td width="148" valign="top">
                                                                         <![endif]-->
                                                                         <table cellpadding="0" cellspacing="0" align="left" class="es-left">
                                                                             <tbody>
                                                                                 <tr>
                                                                                     <td width="138" class="esd-container-frame es-m-p20b" align="center" valign="top">
                                                                                         <table cellpadding="0" cellspacing="0" width="100%">
                                                                                             <tbody>
                                                                                                 <tr>
                                                                                                     <td align="left" class="esd-block-text es-m-txt-c">
                                                                                                         <h2 style="color: #0081ff; line-height: 100%;">
                                                                                                             <font style="vertical-align: inherit;">
                                                                                                                 <font style="vertical-align: inherit;">
                                                                                                                     Icône.
                                                                                                                 </font>
                                                                                                             </font>
                                                                                                         </h2>
                                                                                                     </td>
                                                                                                 </tr>
                                                                                             </tbody>
                                                                                         </table>
                                                                                     </td>
                                                                                     <td class="es-hidden" width="10"></td>
                                                                                 </tr>
                                                                             </tbody>
                                                                         </table>
                                                                         <!--[if mso]>
                                                                     </td>
                                                                     <td width="238" valign="top">
                                                                         <![endif]-->
                                                                         <table cellpadding="0" cellspacing="0" class="es-left" align="left">
                                                                             <tbody>
                                                                                 <tr>
                                                                                     <td width="238" align="left" class="esd-container-frame es-m-p20b">
                                                                                         <table cellpadding="0" cellspacing="0" width="100%">
                                                                                             <tbody>
                                                                                                 <tr>
                                                                                                     <td class="esd-block-menu" esd-tmp-menu-padding="5|0" esd-tmp-menu-font-weight="bold" esd-tmp-menu-color="#333333">
                                                                                                         <table cellpadding="0" cellspacing="0" width="100%" class="es-menu">
                                                                                                             <tbody>
                                                                                                                 <tr class="links">
                                                                                                                     <td align="center" valign="top" width="25%" class="es-p10t es-p10b es-p5r es-p5l" style="padding-top: 5px; padding-bottom: 0px;">
                                                                                                                         <a target="_blank" href="https://viewstripo.email" style="font-weight: bold; color: #0081ff;">
                                                                                                                             <font style="vertical-align: inherit;">
                                                                                                                                 <font style="vertical-align: inherit;">
                                                                                                                                     Travail
                                                                                                                                 </font>
                                                                                                                             </font>
                                                                                                                         </a>
                                                                                                                     </td>
                                                                                                                     <td align="center" valign="top" width="25%" class="es-p10t es-p10b es-p5r es-p5l" style="padding-top: 5px; padding-bottom: 0px;">
                                                                                                                         <a target="_blank" href="https://viewstripo.email" style="font-weight: bold; color: #333333;">
                                                                                                                             <font style="vertical-align: inherit;">
                                                                                                                                 <font style="vertical-align: inherit;">
                                                                                                                                     Boutique
                                                                                                                                 </font>
                                                                                                                             </font>
                                                                                                                         </a>
                                                                                                                     </td>
                                                                                                                     <td align="center" valign="top" width="25%" class="es-p10t es-p10b es-p5r es-p5l" style="padding-top: 5px; padding-bottom: 0px;">
                                                                                                                         <a target="_blank" href="https://viewstripo.email" style="font-weight: bold; color: #333333;">
                                                                                                                             <font style="vertical-align: inherit;">
                                                                                                                                 <font style="vertical-align: inherit;">
                                                                                                                                     Équipe
                                                                                                                                 </font>
                                                                                                                             </font>
                                                                                                                         </a>
                                                                                                                     </td>
                                                                                                                     <td align="center" valign="top" width="25%" class="es-p10t es-p10b es-p5r es-p5l" style="padding-top: 5px; padding-bottom: 0px;">
                                                                                                                         <a target="_blank" href="https://viewstripo.email" style="font-weight: bold; color: #333333;">
                                                                                                                             <font style="vertical-align: inherit;">
                                                                                                                                 <font style="vertical-align: inherit;">
                                                                                                                                     Contact
                                                                                                                                 </font>
                                                                                                                             </font>
                                                                                                                         </a>
                                                                                                                     </td>
                                                                                                                 </tr>
                                                                                                             </tbody>
                                                                                                         </table>
                                                                                                     </td>
                                                                                                 </tr>
                                                                                             </tbody>
                                                                                         </table>
                                                                                     </td>
                                                                                 </tr>
                                                                             </tbody>
                                                                         </table>
                                                                         <!--[if mso]>
                                                                     </td>
                                                                     <td width="10"></td>
                                                                     <td width="144" valign="top">
                                                                         <![endif]-->
                                                                         <table cellpadding="0" cellspacing="0" class="es-right" align="right">
                                                                             <tbody>
                                                                                 <tr>
                                                                                     <td width="144" align="left" class="esd-container-frame">
                                                                                         <table cellpadding="0" cellspacing="0" width="100%">
                                                                                             <tbody>
                                                                                                 <tr>
                                                                                                     <td align="right" class="esd-block-social es-m-txt-c" style="font-size: 0px;">
                                                                                                         <table cellpadding="0" cellspacing="0" class="es-table-not-adapt es-social">
                                                                                                             <tbody>
                                                                                                                 <tr>
                                                                                                                     <td align="center" valign="top" esd-tmp-icon-type="website" class="es-p20r">
                                                                                                                         <a target="_blank" href="https://viewstripo.email"><img title="Site Internet" src="https://xbpilf.stripocdn.email/content/guids/CABINET_87905c520b610b779306b43b7be32065/images/21061583826847757.png" alt="Site Internet" width="24" height="24"></a>
                                                                                                                     </td>
                                                                                                                     <td align="center" valign="top" esd-tmp-icon-type="website">
                                                                                                                         <a target="_blank" href="https://viewstripo.email"><img title="Site Internet" src="https://xbpilf.stripocdn.email/content/guids/CABINET_87905c520b610b779306b43b7be32065/images/93151583827430960.png" alt="Site Internet" width="24" height="24"></a>
                                                                                                                     </td>
                                                                                                                 </tr>
                                                                                                             </tbody>
                                                                                                         </table>
                                                                                                     </td>
                                                                                                 </tr>
                                                                                             </tbody>
                                                                                         </table>
                                                                                     </td>
                                                                                 </tr>
                                                                             </tbody>
                                                                         </table>
                                                                         <!--[if mso]>
                                                                     </td>
                                                                 </tr>
                                                             </table>
                                                             <![endif]-->
                                                         </td>
                                                     </tr>
                                                 </tbody>
                                             </table>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                             <table cellpadding="0" cellspacing="0" class="es-content" align="center">
                                 <tbody>
                                     <tr>
                                         <td class="esd-stripe" align="center">
                                             <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                 <tbody>
                                                     <tr>
                                                         <td class="esd-structure es-p30" align="left">
                                                             <table cellpadding="0" cellspacing="0" width="100%">
                                                                 <tbody>
                                                                     <tr>
                                                                         <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                             <table cellpadding="0" cellspacing="0" width="100%">
                                                                                 <tbody>
                                                                                     <tr>
                                                                                         <td align="center" class="esd-block-image es-m-p30r es-m-p30l" style="font-size: 0px;">
                                                                                             <a target="_blank"><img class="adapt-img" src="https://xbpilf.stripocdn.email/content/guids/CABINET_4fdd20088a4579cd1e96e72ed216b9da/images/beaming_face_with_smiling_eyes.gif" alt style="display: block;" width="128"></a>
                                                                                         </td>
                                                                                     </tr>
                                                                                     <tr>
                                                                                         <td align="center" class="esd-block-text es-m-txt-c es-p20t">
                                                                                             <h1>
                                                                                                 <font style="vertical-align: inherit;">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         Partagez vos émotions et bénéficiez d'une remise
                                                                                                     </font>
                                                                                                 </font>
                                                                                             </h1>
                                                                                         </td>
                                                                                     </tr>
                                                                                     <tr>
                                                                                         <td align="center" class="esd-block-text es-p10t es-p20b es-m-txt-c">
                                                                                             <p>
                                                                                                 <font style="vertical-align: inherit;">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         En l'honneur du World Emoji Day, nous offrons des remises 
                                                                                                     </font>
                                                                                                 </font>
                                                                                                 <strong>
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         <font style="vertical-align: inherit;">
                                                                                                             jusqu'à 10%
                                                                                                         </font>
                                                                                                     </font>
                                                                                                 </strong>
                                                                                                 <font style="vertical-align: inherit;">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                          pour les avis, ainsi qu'un code promotionnel pour les produits promotionnels 
                                                                                                     </font>
                                                                                                 </font>
                                                                                                 <strong>
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         <font style="vertical-align: inherit;">
                                                                                                             jusqu'à 20%
                                                                                                         </font>
                                                                                                     </font>
                                                                                                 </strong>
                                                                                             </p>
                                                                                         </td>
                                                                                     </tr>
                                                                                 </tbody>
                                                                             </table>
                                                                         </td>
                                                                     </tr>
                                                                     <tr>
                                                                         <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                             <table cellpadding="0" cellspacing="0" width="100%" style="border-left:2px dashed #0081ff;border-right:2px dashed #0081ff;border-top:2px dashed #0081ff;border-bottom:2px dashed #0081ff;border-radius: 12px; border-collapse: separate;">
                                                                                 <tbody>
                                                                                     <tr>
                                                                                         <td align="center" class="esd-block-text es-p20t es-p20b es-m-txt-c">
                                                                                             <h2 style="font-family: -apple-system, blinkmacsystemfont, 'segoe ui', roboto, helvetica, arial, sans-serif, 'apple color emoji', 'segoe ui emoji', 'segoe ui symbol';">
                                                                                                 <font style="vertical-align: inherit;">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         PR54-131O-MO1C-5ODE
                                                                                                     </font>
                                                                                                 </font>
                                                                                             </h2>
                                                                                         </td>
                                                                                     </tr>
                                                                                 </tbody>
                                                                             </table>
                                                                         </td>
                                                                     </tr>
                                                                     <tr>
                                                                         <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                             <table cellpadding="0" cellspacing="0" width="100%">
                                                                                 <tbody>
                                                                                     <tr>
                                                                                         <td align="center" class="esd-block-button es-p30t">
                                                                                             <!--[if mso]>
                                                                                             <a href="https://viewstripo.email/" target="_blank" hidden>
                                                                                                 <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" esdevVmlButton href="https://viewstripo.email/"style="height:46px; v-text-anchor:middle; width:196px" arcsize="26%" strokecolor="#0081ff" strokeweight="2px" fillcolor="#0081ff">
                                                                                                     <w:anchorlock></w:anchorlock>
                                                                                                     <center style='color:#ffffff; font-family:arial, "helvetica neue", helvetica, sans-serif; font-size:14px; font-weight:700; line-height:14px;  mso-text-raise:1px'>
                                                                                                         Use Promocode
                                                                                                     </center>
                                                                                                 </v:roundrect>
                                                                                             </a>
                                                                                             <![endif]-->
                                                                                             <!--[if !mso]>
                                                                                             <!-- -->
                                                                                             <span class="msohide es-button-border">
                                                                                                 <a href="https://viewstripo.email/" class="es-button" target="_blank">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         <font style="vertical-align: inherit;">
                                                                                                             Utiliser le code promotionnel
                                                                                                         </font>
                                                                                                     </font>
                                                                                                 </a>
                                                                                             </span>
                                                                                             <!--
                                                                                             <![endif]-->
                                                                                         </td>
                                                                                     </tr>
                                                                                 </tbody>
                                                                             </table>
                                                                         </td>
                                                                     </tr>
                                                                 </tbody>
                                                             </table>
                                                         </td>
                                                     </tr>
                                                 </tbody>
                                             </table>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                             <table cellpadding="0" cellspacing="0" class="es-footer" align="center">
                                 <tbody>
                                     <tr>
                                         <td class="esd-stripe" align="center">
                                             <table bgcolor="#ffffff" class="es-footer-body" align="center" cellpadding="0" cellspacing="0" width="600">
                                                 <tbody>
                                                     <tr>
                                                         <td class="esd-structure es-p30t es-p30r es-p30l" align="left">
                                                             <table cellpadding="0" cellspacing="0" width="100%">
                                                                 <tbody>
                                                                     <tr>
                                                                         <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                             <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#efefef" style="background-color: #efefef; border-radius: 16px; border-collapse: separate;">
                                                                                 <tbody>
                                                                                     <tr>
                                                                                         <td align="center" class="esd-block-text es-p15t es-p15b es-m-txt-c">
                                                                                             <h1 style="color: #333333;">
                                                                                                 <font style="vertical-align: inherit;">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         Icône.
                                                                                                     </font>
                                                                                                 </font>
                                                                                             </h1>
                                                                                         </td>
                                                                                     </tr>
                                                                                 </tbody>
                                                                             </table>
                                                                         </td>
                                                                     </tr>
                                                                 </tbody>
                                                             </table>
                                                         </td>
                                                     </tr>
                                                     <tr>
                                                         <td class="esd-structure es-p30t es-p30b es-p30r es-p30l" align="left">
                                                             <table cellpadding="0" cellspacing="0" width="100%">
                                                                 <tbody>
                                                                     <tr>
                                                                         <td width="540" class="esd-container-frame" align="center" valign="top">
                                                                             <table cellpadding="0" cellspacing="0" width="100%">
                                                                                 <tbody>
                                                                                     <tr>
                                                                                         <td align="left" class="esd-block-text">
                                                                                             <p>
                                                                                                 <font style="vertical-align: inherit;">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
                                                                                                     </font>
                                                                                                 </font>
                                                                                             </p>
                                                                                             <p>
                                                                                                 <font style="vertical-align: inherit;">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                                                                     </font>
                                                                                                 </font>
                                                                                                 <a target="_blank" href="https://viewstripo.email">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         <font style="vertical-align: inherit;">
                                                                                                             Politique de confidentialité
                                                                                                         </font>
                                                                                                     </font>
                                                                                                 </a>
                                                                                                 <font style="vertical-align: inherit;">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                          | 
                                                                                                     </font>
                                                                                                 </font>
                                                                                                 <a target="_blank" href="https://viewstripo.email">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         <font style="vertical-align: inherit;">
                                                                                                             Se désabonner
                                                                                                         </font>
                                                                                                     </font>
                                                                                                 </a>
                                                                                             </p>
                                                                                         </td>
                                                                                     </tr>
                                                                                     <tr>
                                                                                         <td align="left" class="esd-block-text es-p10t es-m-txt-l">
                                                                                             <p>
                                                                                                 <font style="vertical-align: inherit;">
                                                                                                     <font style="vertical-align: inherit;">
                                                                                                         joypixels.com
                                                                                                     </font>
                                                                                                 </font>
                                                                                             </p>
                                                                                         </td>
                                                                                     </tr>
                                                                                 </tbody>
                                                                             </table>
                                                                         </td>
                                                                     </tr>
                                                                 </tbody>
                                                             </table>
                                                         </td>
                                                     </tr>
                                                 </tbody>
                                             </table>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                             <table cellpadding="0" cellspacing="0" class="es-content esd-footer-popover" align="center">
                                 <tbody>
                                     <tr>
                                         <td class="esd-stripe" align="center">
                                             <table class="es-content-body" align="center" cellpadding="0" cellspacing="0" width="600" bgcolor="transparent" style="background-color:transparent;">
                                                 <tbody>
                                                     <tr>
                                                         <td class="esd-structure es-p40t es-p40b" align="left" bgcolor="transparent" style="background-color: transparent;">
                                                             <table width="100%" cellspacing="0" cellpadding="0">
                                                                 <tbody>
                                                                     <tr>
                                                                         <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                             <table width="100%" cellspacing="0" cellpadding="0">
                                                                                 <tbody>
                                                                                     <tr>
                                                                                         <td class="esd-block-image made_with" align="center" style="font-size: 0px;">
                                                                                             <a target="_blank" href="https://viewstripo.email/?utm_source=templates&utm_medium=email&utm_campaign=furniture_home_decor&utm_content=share_your_emotions"><img src="https://xbpilf.stripocdn.email/content/guids/CABINET_9df86e5b6c53dd0319931e2447ed854b/images/64951510234941531.png" alt="Fabriqué avec" title="Fabriqué avec" width="120"></a>
                                                                                         </td>
                                                                                     </tr>
                                                                                 </tbody>
                                                                             </table>
                                                                         </td>
                                                                     </tr>
                                                                 </tbody>
                                                             </table>
                                                         </td>
                                                     </tr>
                                                 </tbody>
                                             </table>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </td>
                     </tr>
                 </tbody>
             </table>
         </div>
     </body>
 </html>
 
 