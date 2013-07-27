<?php

/* CmarMeetingBundle:Room:anonymous.html.twig */
class __TwigTemplate_89ba79786ab135d60becfbd06af517c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CmarMeetingBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "eMeeting
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<h2 style=\"border-bottom:4px solid #b19653; color:#b19653; font-weight:bold; font-size:18px; margin-bottom: 5px; padding: 0px 0px 5px 10px; margin-bottom:25px;\">Access Control</h2>

<div class=\"np\" style=\"height: 220px; margin: 10px; position: relative\">
  <p style=\"font-size:45px; text-align: left; margin: -20px 0px 15px -70px\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "</p>
  <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/anonymous.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\">
      var pageContent = document.getElementById('pagecontent');
      visibility(pageContent, \"hidden\");
      function loginMeetingUser(){
        if (document.contentForm.chooser.checked) {
          document.getElementById(\"login-guest\").click();
        } else {
          document.getElementById(\"login-button\").click();
        }
      }
    </script>
    <form action=\"#\" method=\"post\" id=\"contentForm\" name=\"contentForm\">    
      <input id=\"radio-button-sel\" type=\"hidden\" name=\"radio-button-sel\" value=\"1\">
      <div id=\"login_guest\" class=\"pod\" style=\"left: 30px; top: 43px; width: 100%; visibility: visible; height: 20px;\">
\t<div id=\"rad_guest\" style=\"visibility: visible; float:left\">
\t  <input id=\"radioguest\" class=\"loginHelp\" type=\"radio\" onclick=\"javaScript:switchToGuest(true);\" onfocus=\"javaScript:switchToGuest(true);\" name=\"chooser\" style=\"visibility: visible;\">
\t</div>
\t<div for=\"radioguest\">
\t  <h3>Enter as a Guest</h3>
\t</div>
\t<div id=\"guest_inputs\" class=\"loginControls\" style=\"text-align: left; visibility: visible; margin: 15px;\">
\t  <div id=\"guest_button\" class=\"loginControls\" style=\"top: 13px; visibility: visible; width: 115px;\"> </div>
\t  <table>
\t    <tbody>
\t      <tr>
\t\t<td class=\"loginField\" style=\"text-align:right;vertical-align:top\">Name</td>
\t\t<td>
\t\t  <input id=\"guestName\" class=\"textfield\" type=\"text\" value=\"\" name=\"login\" style=\"width: 215px;\">
\t\t</td>
\t      </tr>
\t      <tr>
\t\t<td></td>
\t\t<td>
\t\t  <input id=\"login-guest\" class=\"button otherblue\" type=\"submit\" value=\"Enter The Room\">
\t\t</td>
\t      </tr>
\t    </tbody>
\t  </table>
\t</div>
      </div>
    </form>
    
    <form action=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\" id=\"contentForm1\" name=\"contentForm1\" style=\"padding: 10px 0px;\">
      <div id=\"login_reg\" class=\"pod\" style=\"width: 450px; height: 260px; display: block;\">
\t<div id=\"rad_reg\" style=\"visibility: visible; float: left;\">
\t  <input id=\"radioreg\" class=\"loginHelp\" type=\"radio\" onclick=\"javaScript:switchToReg(true);\" onfocus=\"javaScript:switchToReg(true);\" name=\"chooser\" style=\"visibility: visible;\">
\t</div>
\t<h3>Enter as a DigiMar User</h3>
\t<div id=\"login_reg_hint\" style=\"padding: 0px; width: 400px; display: none; visibility: hidden;\">
\t</div>
\t<div id=\"login_reg_inputs\" style=\"visibility: visible;\">
\t  <table>
\t    <tbody>
\t      <tr>
\t\t<td class=\"loginField\" style=\"text-align:right;\">Email: &nbsp;</td>
\t\t<td>
\t\t  <input id=\"username\" class=\"textfield\" type=\"text\" autocomplete=\"off\" name=\"_username\">
\t\t</td>
\t      </tr>
\t      <tr>
\t\t<td class=\"loginField\" style=\"text-align:right; vertical-align:baseline;\">Password: &nbsp;</td>
\t\t<td class=\"loginControls\" style=\"text-align:left;\">
\t\t  <input id=\"password\" class=\"textfield\" type=\"password\" autocomplete=\"off\" name=\"_password\">
\t\t  <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\" />
\t\t</td>
\t      </tr>
\t      <tr>
\t\t<td>&nbsp;</td>
\t\t<td style=\"padding-top: 5px\"><a class=\"loginHelp\" style=\"margin: 15px; font-size: 16px; color: #FFF; text-decoration: none\" target=\"_self\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_welcome"), "html", null, true);
        echo "\">Forgot your password?</a></td>
\t      </tr>
\t      <tr>
\t\t<td>&nbsp;</td>
\t\t<td style=\"padding-top:10px;\">
\t\t  <input id=\"login-button\" class=\"button otherblue\" type=\"submit\" name=\"login\" value=\"Enter The Room\">
\t\t</td>
\t      </tr>
\t    </tbody>
\t  </table>
\t  <div id=\"reg_button\" class=\"loginControls\" style=\"width: 115px; left: 228px; top: 100px;\"> </div>
\t</div>
      </div>
    </form>
  <script type=\"text/javascript\">
    var regGuest = document.getElementById('guest');

    var regRadioButton = document.getElementById('rad_reg');
    var regLogin = document.getElementById('login_reg');
    var regInputs = document.getElementById('login_reg_inputs');
    var regButton = document.getElementById('reg_button');
    var guestLogin = document.getElementById('login_guest');
    var guestRadioButton = document.getElementById('rad_guest');
    var guestInputs = document.getElementById('guest_inputs');
    var guestButton = document.getElementById('guest_button');
    var regHint = document.getElementById('login_reg_hint');
    var helpLink = document.getElementById('helpLink');
    var helpDiv = document.getElementById('helpDiv');
    var privacyPolicy = document.getElementById('privacyPolicy');
    var regTop;
    var chooser = 0;
    var TOP_UNSEL = 381;
    var TOP_SELECT = 322; //pixels from top if reg button is selected
    var BUTTON_OFFSET = 7; //pixels from top to add for radio button
    var GUEST_POPUP = 200; //millis to wait to popup guest pod
    var width, height; //window size
    var headerh = 171;
    var loaded = false;

    visibility(guestRadioButton, \"visible\");
    visibility(regRadioButton, \"visible\");
    visibility(regInputs, \"hidden\");
    if(regLogin != null) {
      regHint.style.width = \"400px\";
      regLogin.style.height = \"50px\";
      regLogin.style.width = \"450px\";
      regLogin.style.left = \"30px\";
      regLogin.style.top = \"260px\";
      regLogin.style.display = \"block\";
      if(helpLink != null)
      helpLink.style.top = \"70px\";
      if(helpDiv != null)
      helpDiv.style.top = \"215px\";
      if(privacyPolicy != null)
        privacyPolicy.style.top = \"240px\";
    }
    if(guestButton != null) {
      guestButton.style.left = \"300px\";
      guestButton.style.top = \"350px\";
      guestButton.style.visibility = \"visible\";
    }
    visibility(pageContent, \"visible\");
    el = document.getElementById('split');
    visibility(el, \"hidden\");
    if(guestLogin != null) {
      guestInputs.style.marginTop = \"0px\";
      guestLogin.style.left = \"30px\";
      guestLogin.style.top = \"43px\";
      guestLogin.style.width = \"450px\";
      guestLogin.style.visibility = \"visible\";
    }
    //if previously logged in, set default to that
    
    ";
        // line 154
        if ($this->getContext($context, "asGuest")) {
            // line 155
            echo "      switchToReg(false);
      switchToGuest(true);
      if (chooser == 0) {
      document.contentForm.chooser.checked = true;
      document.contentForm1.chooser.checked = false;
      document.contentForm.username.focus();
    }
    ";
        } else {
            // line 163
            echo "      switchToReg(false);
      if (chooser == 0) {
        document.contentForm1.chooser.checked = true;
        document.contentForm.chooser.checked = false;
        document.contentForm1.username.focus();
      }
    ";
        }
        // line 170
        echo "

    
  </script>
  <div style=\"position: absolute; top: 100px; left: 550px\">
    <img align=\"right\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/emeeting.png"), "html", null, true);
        echo "\"></img>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Room:anonymous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
