<?php

require_once('simplepie.php');

$root_url = 'http://nomacorc.com';
$url = $root_url . '/test-feed/';

$main_feed = $root_url . '/feed';

$feed = new SimplePie();
$feed->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/post-test/cache/');
$feed->set_feed_url($url);
$feed->init();

$feed_two = new SimplePie();
$feed_two->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/post-test/cache/');
$feed_two->set_feed_url($main_feed);
$feed_two->init();

// default starting item
$start = 0;

// default number of items to display. 0 = all
$length = 5;

// if single item, set start to item number and length to 1
if(isset($_GET['item']))
{
  $start = $_GET['item'];
  $length = 1;
}

// set item link to script uri
$link = $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html> <head>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <!-- NAME: BASIC RSS -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nomacorc RSS to Newsletter Test</title>

  <style type="text/css">
  body,#bodyTable,#bodyCell{
    height:100% !important;
    margin:0;
    padding:0;
    width:100% !important;
  }
  table{
    border-collapse:collapse;
  }
  img,a img{
    border:0;
    outline:none;
    text-decoration:none;
  }
  h1,h2,h3,h4,h5,h6{
    margin:0;
    padding:0;
  }
  p{
    margin:1em 0;
    padding:0;
  }
  a{
    word-wrap:break-word;
  }
  .ReadMsgBody{
    width:100%;
  }
  .ExternalClass{
    width:100%;
  }
  .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
    line-height:100%;
  }
  table,td{
    mso-table-lspace:0pt;
    mso-table-rspace:0pt;
  }
  #outlook a{
    padding:0;
  }
  img{
    -ms-interpolation-mode:bicubic;
  }
  body,table,td,p,a,li,blockquote{
    -ms-text-size-adjust:100%;
    -webkit-text-size-adjust:100%;
  }
  #bodyCell{
    padding:20px;
  }
  .mcnImage{
    vertical-align:bottom;
  }
  .mcnTextContent img{
    height:auto !important;
  }
  body,#bodyTable{
    background-color:#F2F2F2;
  }
  #bodyCell{
    border-top:0;
  }
  #templateContainer{
    border:0;
  }
  h1{
    color:#606060 !important;
    display:block;
    font-family:Helvetica;
    font-size:40px;
    font-style:normal;
    font-weight:bold;
    line-height:125%;
    letter-spacing:-1px;
    margin:0;
    text-align:left;
  }
  h2{
    color:#404040 !important;
    display:block;
    font-family:Helvetica;
    font-size:26px;
    font-style:normal;
    font-weight:bold;
    line-height:125%;
    letter-spacing:-.75px;
    margin:0;
    text-align:left;
  }
  h3{
    color:#606060 !important;
    display:block;
    font-family:Helvetica;
    font-size:18px;
    font-style:normal;
    font-weight:bold;
    line-height:125%;
    letter-spacing:-.5px;
    margin:0;
    text-align:left;
  }
  h4{
    color:#808080 !important;
    display:block;
    font-family:Helvetica;
    font-size:16px;
    font-style:normal;
    font-weight:bold;
    line-height:125%;
    letter-spacing:normal;
    margin:0;
    text-align:left;
  }
  #templatePreheader{
    background-color:#FFFFFF;
    border-top:0;
    border-bottom:0;
  }
  .preheaderContainer .mcnTextContent,.preheaderContainer .mcnTextContent p{
    color:#606060;
    font-family:Helvetica;
    font-size:11px;
    line-height:125%;
    text-align:left;
  }
  .preheaderContainer .mcnTextContent a{
    color:#606060;
    font-weight:normal;
    text-decoration:underline;
  }
  #templateHeader{
    background-color:#FFFFFF;
    border-top:0;
    border-bottom:0;
  }
  .headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
    color:#606060;
    font-family:Helvetica;
    font-size:15px;
    line-height:150%;
    text-align:left;
  }
  .headerContainer .mcnTextContent a{
    color:#6DC6DD;
    font-weight:normal;
    text-decoration:underline;
  }
  #templateBody{
    background-color:#FFFFFF;
    border-top:0;
    border-bottom:0;
  }
  .bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
    color:#606060;
    font-family:Helvetica;
    font-size:15px;
    line-height:150%;
    text-align:left;
  }
  .bodyContainer .mcnTextContent a{
    color:#324f6b;
    font-weight:normal;
    text-decoration:underline;
  }
  #templateFooter{
    background-color:#faf6ed;
    border-top:0;
    border-bottom:0;
  }
  .footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
    color:#606060;
    font-family:Helvetica;
    font-size:11px;
    line-height:125%;
    text-align:left;
  }
  .footerContainer .mcnTextContent a{
    color:#606060;
    font-weight:normal;
    text-decoration:underline;
  }
  @media only screen and (max-width: 480px){
    body,table,td,p,a,li,blockquote{
      -webkit-text-size-adjust:none !important;
    }

  }	@media only screen and (max-width: 480px){
    body{
      width:100% !important;
      min-width:100% !important;
    }

  }	@media only screen and (max-width: 480px){
    td[id=bodyCell]{
      padding:10px !important;
    }

  }	@media only screen and (max-width: 480px){
    table[class=mcnTextContentContainer]{
      width:100% !important;
    }

  }	@media only screen and (max-width: 480px){
    table[class=mcnBoxedTextContentContainer]{
      width:100% !important;
    }

  }	@media only screen and (max-width: 480px){
    table[class=mcpreview-image-uploader]{
      width:100% !important;
      display:none !important;
    }

  }	@media only screen and (max-width: 480px){
    img[class=mcnImage]{
      width:100% !important;
    }

  }	@media only screen and (max-width: 480px){
    table[class=mcnImageGroupContentContainer]{
      width:100% !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=mcnImageGroupContent]{
      padding:9px !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=mcnImageGroupBlockInner]{
      padding-bottom:0 !important;
      padding-top:0 !important;
    }

  }	@media only screen and (max-width: 480px){
    tbody[class=mcnImageGroupBlockOuter]{
      padding-bottom:9px !important;
      padding-top:9px !important;
    }

  }	@media only screen and (max-width: 480px){
    table[class=mcnCaptionTopContent],table[class=mcnCaptionBottomContent]{
      width:100% !important;
    }

  }	@media only screen and (max-width: 480px){
    table[class=mcnCaptionLeftTextContentContainer],table[class=mcnCaptionRightTextContentContainer],table[class=mcnCaptionLeftImageContentContainer],table[class=mcnCaptionRightImageContentContainer],table[class=mcnImageCardLeftTextContentContainer],table[class=mcnImageCardRightTextContentContainer]{
      width:100% !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=mcnImageCardLeftImageContent],td[class=mcnImageCardRightImageContent]{
      padding-right:18px !important;
      padding-left:18px !important;
      padding-bottom:0 !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=mcnImageCardBottomImageContent]{
      padding-bottom:9px !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=mcnImageCardTopImageContent]{
      padding-top:18px !important;
    }

  }	@media only screen and (max-width: 480px){
    table[class=mcnCaptionLeftContentOuter] td[class=mcnTextContent],table[class=mcnCaptionRightContentOuter] td[class=mcnTextContent]{
      padding-top:9px !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=mcnCaptionBlockInner] table[class=mcnCaptionTopContent]:last-child td[class=mcnTextContent]{
      padding-top:18px !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=mcnBoxedTextContentColumn]{
      padding-left:18px !important;
      padding-right:18px !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=mcnTextContent]{
      padding-right:18px !important;
      padding-left:18px !important;
    }

  }	@media only screen and (max-width: 480px){
    table[id=templateContainer],table[id=templatePreheader],table[id=templateHeader],table[id=templateBody],table[id=templateFooter]{
      max-width:600px !important;
      width:100% !important;
    }

  }	@media only screen and (max-width: 480px){
    h1{
      font-size:24px !important;
      line-height:125% !important;
    }

  }	@media only screen and (max-width: 480px){
    h2{
      font-size:20px !important;
      line-height:125% !important;
    }

  }	@media only screen and (max-width: 480px){
    h3{
      font-size:18px !important;
      line-height:125% !important;
    }

  }	@media only screen and (max-width: 480px){
    h4{
      font-size:16px !important;
      line-height:125% !important;
    }

  }	@media only screen and (max-width: 480px){
    table[class=mcnBoxedTextContentContainer] td[class=mcnTextContent],td[class=mcnBoxedTextContentContainer] td[class=mcnTextContent] p{
      font-size:18px !important;
      line-height:125% !important;
    }

  }	@media only screen and (max-width: 480px){
    table[id=templatePreheader]{
      display:block !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=preheaderContainer] td[class=mcnTextContent],td[class=preheaderContainer] td[class=mcnTextContent] p{
      font-size:14px !important;
      line-height:115% !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=headerContainer] td[class=mcnTextContent],td[class=headerContainer] td[class=mcnTextContent] p{
      font-size:18px !important;
      line-height:125% !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=bodyContainer] td[class=mcnTextContent],td[class=bodyContainer] td[class=mcnTextContent] p{
      font-size:18px !important;
      line-height:125% !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=footerContainer] td[class=mcnTextContent],td[class=footerContainer] td[class=mcnTextContent] p{
      font-size:14px !important;
      line-height:115% !important;
    }

  }	@media only screen and (max-width: 480px){
    td[class=footerContainer] a[class=utilityLink]{
      display:block !important;
    }

  }</style>
  </head>
      <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #F2F2F2;height: 100% !important;width: 100% !important;">
        <center>
          <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 0;background-color: #F2F2F2;height: 100% !important;width: 100% !important;">
            <tr>
              <td align="center" valign="top" id="bodyCell" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 20px;border-top: 0;height: 100% !important;width: 100% !important;">


<!--  loop through items -->
<?php foreach($feed->get_items($start,$length) as $key=>$item){ ?>

  <!-- BEGIN TEMPLATE // -->
  <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border: 0;">
    <tr>
      <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
        <!-- BEGIN PREHEADER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="600" id="templatePreheader" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;">
          <tr>
            <td valign="top" class="preheaderContainer" style="padding-top: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
              <tbody class="mcnTextBlockOuter">
                <tr>
                  <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="366" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                      <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-left: 18px;padding-bottom: 9px;padding-right: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;">


                        </td>
                      </tr>
                    </tbody></table>

                    <table align="right" border="0" cellpadding="0" cellspacing="0" width="197" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                      <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;">

                          <a href="http://us9.campaign-archive2.com/?u=b2866cb67de6d968e2be2ba47&id=badf08beb7&e=[UNIQID]" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-weight: normal;text-decoration: underline;">View this email in your browser</a>
                        </td>
                      </tr>
                    </tbody></table>

                  </td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </table>
        <!-- // END PREHEADER -->
      </td>
    </tr>
    <tr>
      <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
        <!-- BEGIN HEADER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;">
          <tr>
            <td valign="top" class="headerContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
              <tbody class="mcnImageBlockOuter">
                <tr>
                  <td valign="top" style="padding: 0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                      <tbody><tr>
                        <td class="mcnImageContent" valign="top" style="padding-right: 0px;padding-left: 0px;padding-top: 0;padding-bottom: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">


                          <img align="left" alt="" src="https://gallery.mailchimp.com/b2866cb67de6d968e2be2ba47/images/3b2f0216-dca6-48fe-bd7e-92df74e27190.jpg" width="600" style="max-width: 600px;padding-bottom: 0;display: inline !important;vertical-align: bottom;border: 0;outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;" class="mcnImage">


                        </td>
                      </tr>
                    </tbody></table>
                  </td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </table>
        <!-- // END HEADER -->
      </td>
    </tr>
    <tr>
      <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
        <!-- BEGIN BODY // -->
        <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;">
          <tr>
            <td valign="top" class="bodyContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
              <tbody class="mcnTextBlockOuter">
                <tr>
                  <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="NaN" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                      <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 15px;line-height: 150%;text-align: left;">

                          <h1 style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 40px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -1px;text-align: left;color: #606060 !important;">Nomacorc</h1>

                        </td>
                      </tr>
                    </tbody></table>

                  </td>
                </tr>
              </tbody>
            </table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
              <tbody class="mcnTextBlockOuter">
                <tr>
                  <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="NaN" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                      <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 15px;line-height: 150%;text-align: left;">


                          <h2 class="mc-toc-title" style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 26px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -.75px;text-align: left;color: #404040 !important;"><a href="<?php echo $item->get_link(); ?>" target="_blank" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #324f6b;font-weight: normal;text-decoration: underline;"><?php echo $item->get_title(); ?></a></h2>
                          <em>By <?php $authors = $item->get_authors(); ?>
                            <?php echo $authors[0]->email; ?> on <?php echo $item->get_date(); ?></em><br>
                          <?php echo $item->get_content(); ?>
                          <br>
                          <br>
                          <br>
                          <br>
                          <br>
                          <h3 class="h3" style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 18px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -.5px;text-align: left;color: #606060 !important;">Recent Articles:</h3>
                          <?php foreach($feed_two->get_items($start,$length) as $key=>$item){ ?>
                          <a rel="nofollow" target="_blank" href="<?php echo $item->get_link(); ?>" class="rss-recent"><?php echo $item->get_title(); ?></a>
                          <br>
                          <?php } ?>
                        </td>
                      </tr>
                    </tbody></table>

                  </td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </table>
        <!-- // END BODY -->
      </td>
    </tr>
    <tr>
      <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
        <!-- BEGIN FOOTER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateFooter" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #faf6ed;border-top: 0;border-bottom: 0;">
          <tr>
            <td valign="top" class="footerContainer" style="padding-bottom: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
              <tbody class="mcnTextBlockOuter">
                <tr>
                  <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                    <table align="left" border="0" cellpadding="0" cellspacing="0" width="600" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                      <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;">

                          <em><span style="color:#663300">Copyright © 2015 Nomacorc, All rights reserved.</span></em><br>
                          <span style="color:#663300"></span><br>
                          <br>
                          <a class="utilityLink" href="http://nomacorc.us9.list-manage2.com/unsubscribe?u=b2866cb67de6d968e2be2ba47&id=e041d5be31&e=[UNIQID]&c=badf08beb7" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-weight: normal;text-decoration: underline;"><span style="color:#663300">unsubscribe from this list</span></a><span style="color:#663300">&nbsp;&nbsp;&nbsp; </span><a class="utilityLink" href="http://nomacorc.us9.list-manage.com/profile?u=b2866cb67de6d968e2be2ba47&id=e041d5be31&e=[UNIQID]" style="word-wrap: break-word;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-weight: normal;text-decoration: underline;"><span style="color:#663300">update subscription preferences</span></a><span style="color:#663300">&nbsp;<br>
                            <br>
                            <a href="http://www.mailchimp.com/monkey-rewards/?utm_source=freemium_newsletter&utm_medium=email&utm_campaign=monkey_rewards&aid=b2866cb67de6d968e2be2ba47&afl=1"><img src="http://cdn-images.mailchimp.com/monkey_rewards/MC_MonkeyReward_15.png" border="0" alt="Email Marketing Powered by MailChimp" title="MailChimp Email Marketing" width="139" height="54"></a> </span>
                          </td>
                        </tr>
                      </tbody></table>

                    </td>
                  </tr>
                </tbody>
              </table></td>
            </tr>
          </table>
          <!-- // END FOOTER -->
        </td>
      </tr>
    </table>
    <!-- // END TEMPLATE -->
    <div style="height: 80px; width: 100%;"></div>
  <?php } ?>
</td>
</tr>
</table>
</center>
</body> </html>
