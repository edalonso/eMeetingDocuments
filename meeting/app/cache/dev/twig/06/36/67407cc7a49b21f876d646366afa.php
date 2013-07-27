<?php

/* CmarMeetingBundle:email:email.txt.twig */
class __TwigTemplate_063667407cc7a49b21f876d646366afa extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Dear ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo ",

This message is to inform you that your email address has been validated and you may now proceed to set your password for your Digimar account.

Please click on the link below within 24 hours to set your password. 

";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "

If your company's mail server does not allow HTML email messages, you can paste the necessary URL into your browser to complete the process.

--
Digimar
Campus Digital do Mar
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:email:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
