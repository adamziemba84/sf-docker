<?php

/* base.html.twig */
class __TwigTemplate_e95975dae0326fe97e1106544277ac5c43b3d0aa975f0d4e7e77d67bc128621f extends Twig_Template
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
        $__internal_c041a4fdd5d479a9e4ae3c92bb3167efd4f20d0833b4fb64b2b9d5f52a872e4c = $this->env->getExtension("native_profiler");
        $__internal_c041a4fdd5d479a9e4ae3c92bb3167efd4f20d0833b4fb64b2b9d5f52a872e4c->enter($__internal_c041a4fdd5d479a9e4ae3c92bb3167efd4f20d0833b4fb64b2b9d5f52a872e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c041a4fdd5d479a9e4ae3c92bb3167efd4f20d0833b4fb64b2b9d5f52a872e4c->leave($__internal_c041a4fdd5d479a9e4ae3c92bb3167efd4f20d0833b4fb64b2b9d5f52a872e4c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e910c36e61f2684960f0c59e0857b2d56d7c3ac05eee701207b237db4f9b4ed0 = $this->env->getExtension("native_profiler");
        $__internal_e910c36e61f2684960f0c59e0857b2d56d7c3ac05eee701207b237db4f9b4ed0->enter($__internal_e910c36e61f2684960f0c59e0857b2d56d7c3ac05eee701207b237db4f9b4ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e910c36e61f2684960f0c59e0857b2d56d7c3ac05eee701207b237db4f9b4ed0->leave($__internal_e910c36e61f2684960f0c59e0857b2d56d7c3ac05eee701207b237db4f9b4ed0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_306f37cb51346ed8347a825c2310780c2ad28a1a3aaa301de107bf8de2eced0a = $this->env->getExtension("native_profiler");
        $__internal_306f37cb51346ed8347a825c2310780c2ad28a1a3aaa301de107bf8de2eced0a->enter($__internal_306f37cb51346ed8347a825c2310780c2ad28a1a3aaa301de107bf8de2eced0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_306f37cb51346ed8347a825c2310780c2ad28a1a3aaa301de107bf8de2eced0a->leave($__internal_306f37cb51346ed8347a825c2310780c2ad28a1a3aaa301de107bf8de2eced0a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dabb4af2eb145d8bc6d911e4a6edd3850e24fff18869df9a49f1ed2cf7e9e378 = $this->env->getExtension("native_profiler");
        $__internal_dabb4af2eb145d8bc6d911e4a6edd3850e24fff18869df9a49f1ed2cf7e9e378->enter($__internal_dabb4af2eb145d8bc6d911e4a6edd3850e24fff18869df9a49f1ed2cf7e9e378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dabb4af2eb145d8bc6d911e4a6edd3850e24fff18869df9a49f1ed2cf7e9e378->leave($__internal_dabb4af2eb145d8bc6d911e4a6edd3850e24fff18869df9a49f1ed2cf7e9e378_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8a4efb8a3d95d2fc9a6b1ec9e3717832cd0d073ce530b221aac24f3feac22c4 = $this->env->getExtension("native_profiler");
        $__internal_c8a4efb8a3d95d2fc9a6b1ec9e3717832cd0d073ce530b221aac24f3feac22c4->enter($__internal_c8a4efb8a3d95d2fc9a6b1ec9e3717832cd0d073ce530b221aac24f3feac22c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c8a4efb8a3d95d2fc9a6b1ec9e3717832cd0d073ce530b221aac24f3feac22c4->leave($__internal_c8a4efb8a3d95d2fc9a6b1ec9e3717832cd0d073ce530b221aac24f3feac22c4_prof);

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
