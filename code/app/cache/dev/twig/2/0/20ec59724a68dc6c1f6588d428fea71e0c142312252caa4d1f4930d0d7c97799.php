<?php

/* base.html.twig */
class __TwigTemplate_542f8ebd14c31f68ec0dc77738c444a838f654f95d71225eb0ae6983c7f0f0c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b26d064349296c414ca5e0fcd1f19f7a03fc8c5ec50a1c964d1e3e581e6832a1 = $this->env->getExtension("native_profiler");
        $__internal_b26d064349296c414ca5e0fcd1f19f7a03fc8c5ec50a1c964d1e3e581e6832a1->enter($__internal_b26d064349296c414ca5e0fcd1f19f7a03fc8c5ec50a1c964d1e3e581e6832a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b26d064349296c414ca5e0fcd1f19f7a03fc8c5ec50a1c964d1e3e581e6832a1->leave($__internal_b26d064349296c414ca5e0fcd1f19f7a03fc8c5ec50a1c964d1e3e581e6832a1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37d880a74c9ba5c817b924abc420a651e20ef4cc54b83956010fd665dd8e0584 = $this->env->getExtension("native_profiler");
        $__internal_37d880a74c9ba5c817b924abc420a651e20ef4cc54b83956010fd665dd8e0584->enter($__internal_37d880a74c9ba5c817b924abc420a651e20ef4cc54b83956010fd665dd8e0584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_37d880a74c9ba5c817b924abc420a651e20ef4cc54b83956010fd665dd8e0584->leave($__internal_37d880a74c9ba5c817b924abc420a651e20ef4cc54b83956010fd665dd8e0584_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c20cf9ee0d501e134f36b6b545a3c93e69076db6a449c6b231ab5acd8c25f9d6 = $this->env->getExtension("native_profiler");
        $__internal_c20cf9ee0d501e134f36b6b545a3c93e69076db6a449c6b231ab5acd8c25f9d6->enter($__internal_c20cf9ee0d501e134f36b6b545a3c93e69076db6a449c6b231ab5acd8c25f9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c20cf9ee0d501e134f36b6b545a3c93e69076db6a449c6b231ab5acd8c25f9d6->leave($__internal_c20cf9ee0d501e134f36b6b545a3c93e69076db6a449c6b231ab5acd8c25f9d6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_843782651d60b2acc3cb1766f525a1d2666a64dd1804440a4d18690a8a449b13 = $this->env->getExtension("native_profiler");
        $__internal_843782651d60b2acc3cb1766f525a1d2666a64dd1804440a4d18690a8a449b13->enter($__internal_843782651d60b2acc3cb1766f525a1d2666a64dd1804440a4d18690a8a449b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_843782651d60b2acc3cb1766f525a1d2666a64dd1804440a4d18690a8a449b13->leave($__internal_843782651d60b2acc3cb1766f525a1d2666a64dd1804440a4d18690a8a449b13_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a35be3a053074ddd721ac25021631ce54623f1cd6d8c1b41150088926049c0a = $this->env->getExtension("native_profiler");
        $__internal_4a35be3a053074ddd721ac25021631ce54623f1cd6d8c1b41150088926049c0a->enter($__internal_4a35be3a053074ddd721ac25021631ce54623f1cd6d8c1b41150088926049c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4a35be3a053074ddd721ac25021631ce54623f1cd6d8c1b41150088926049c0a->leave($__internal_4a35be3a053074ddd721ac25021631ce54623f1cd6d8c1b41150088926049c0a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
