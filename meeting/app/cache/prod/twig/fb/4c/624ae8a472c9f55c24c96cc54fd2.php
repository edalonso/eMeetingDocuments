<?php

/* CmarMeetingBundle:email:email_exceed_participants.html.twig */
class __TwigTemplate_fb4c624ae8a472c9f55c24c96cc54fd2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>

<head>
  <style>
    body { font: 13px/1.5 Arial, sans-serif; }
    ul { margin-left: .5em; padding-left: 0; }
  </style>
</head>

<body>
  <table cellpadding=\"0\" cellspacing=\"0\" style=\"width:80%;\" width=\"80%\">
    <tr style=\"color: #7F7F7F;\">
      <td style=\"border-bottom: 4px solid #B19653;\">
        <a style=\"color: #FFF; font-size: 21px; text-decoration: none;\" href=\"http://campusdomar.es\">
          <img style=\"margin: 0px; max-width: 250px;\" src=\"http://emeeting.campusdomar.es/bundles/cmarmeeting/images/campusdomar_logo.gif\" />
        </a>
      </td>
      <td valign=\"bottom\" style=\"text-align: right; border-bottom: 4px solid #B19653;\">Campus de excelencia internacional</td>
    </tr>
    
    <tr>
      <td colspan=\"2\" style=\"padding: 25px\">
       <p>Dear admin,</p>

       <p>This message is to inform you that the eMeeting application is close to the maximum number of participants.</p>

      </td>
    </tr>

    <tr style=\"color: #005268;\">
      <td style=\"border-bottom: 8px solid #B19653;\">
        <table cellpadding=\"0\" cellspacing=\"0\" style=\"width:350px; background: #7F7F7F; color: #FFF; padding: 20px; margin-top:10px; border-top: 2px solid #B19653; font-size: 9px; font-weight: bolder;\" width=\"350px\" >
          <tr>
            <td>
              <p>Campus do Mar</p>
              <p>
                Plaza Miralles - Local A7<br />
                Campus Universitario de Vigo<br />
                36310, Vigo (Pontevedra)<br />
                Espa&ntilde;a
              </p>
            </td>
            <td style=\"\">
              Telf: +34 986 813 438<br />
              info@campusdomar.es
            </td>
          </tr>
        </table>
      </td>
      <td valign=\"bottom\" style=\"text-align: right; border-bottom: 8px solid #B19653;\">www.campusdomar.es</td>
    </tr>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:email:email_exceed_participants.html.twig";
    }

}
