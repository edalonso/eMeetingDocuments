<?php

/* CmarMeetingBundle:User:userForm.html.twig */
class __TwigTemplate_2a5314e0b01767f947651f4e8d3acf16 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addusers_meeting"), "html", null, true);
        echo "\" method=\"get\" onsubmit=\"selectall('token-input-pre-populated-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "')\">
  <input type=\"hidden\" name=\"id\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" />
  <div style=\"height: 140%; margin: 14px 0px 0px 35px\" id=\"container-";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\">
    <input id=\"token-input-pre-populated-";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" type=\"text\" autocomplete=\"off\" style=\"outline: medium none; width: 30px;\" name=\"pre-populated\">
    <input style=\"margin: 25px; margin-left: 15%; margin-bottom: 10px; font-size: 12px;\" type=\"submit\" class=\"button\" value=\"Save\"/>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"margin-top: 25px; margin-bottom: 10px; float: right; margin-right: 25%; font-size: 12px; text-decoration: none\" class=\"button\" >Cancel</a>
  </div>
</form>

<script type=\"text/javascript\">
\$(document).ready(function () {
    \$(\"#token-input-pre-populated-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\").tokenInput(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_list"), "html", null, true);
        echo "\", {
      minChars: 3,
      hintText: \"Type in a DigiMar User\",
      preventDuplicates: true,
      onReady: function(){
        \$('#token-input-pre-populated-";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "').focus();
      },
      prePopulate: [
          {id: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"), "html", null, true);
        echo ", name: \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "surname"), "html", null, true);
        echo " &lt";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "email"), "html", null, true);
        echo "&gt\"},
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "meeting"), "users"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "          {id: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
            echo ", name: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "surname"), "html", null, true);
            echo " &lt";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
            echo "&gt\"},
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "       ]
  });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:User:userForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
