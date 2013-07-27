<?php

/* CmarMeetingBundle:email:email.html.twig */
class __TwigTemplate_e5f6cfc5e8c2210791402a323edf7257 extends Twig_Template
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
       <p>Dear ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo ",</p>

       <p>This message is to inform you that your email address has been validated and you may now proceed to set your password for your Digimar account.</p>

       <p>Please click on the link below within 24 hours to set your password. </p>

       <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\">Change Password</a>
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
        return "CmarMeetingBundle:email:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
