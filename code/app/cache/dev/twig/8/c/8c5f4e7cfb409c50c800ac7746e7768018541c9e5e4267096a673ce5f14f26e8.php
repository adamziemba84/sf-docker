<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_37f87f5acd22a70e9d886a4e56c46d68cc14ffcb82972a5424f5e21ee64eefec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ec9c65dd9cb336443ab0c8ccd4349ae487abf2513fd264e7930356589122448 = $this->env->getExtension("native_profiler");
        $__internal_3ec9c65dd9cb336443ab0c8ccd4349ae487abf2513fd264e7930356589122448->enter($__internal_3ec9c65dd9cb336443ab0c8ccd4349ae487abf2513fd264e7930356589122448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ec9c65dd9cb336443ab0c8ccd4349ae487abf2513fd264e7930356589122448->leave($__internal_3ec9c65dd9cb336443ab0c8ccd4349ae487abf2513fd264e7930356589122448_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8cdc4365b870ec3c6b1115ce2cf787ce5c41e5a7e7b7c1b25e07e0befad49757 = $this->env->getExtension("native_profiler");
        $__internal_8cdc4365b870ec3c6b1115ce2cf787ce5c41e5a7e7b7c1b25e07e0befad49757->enter($__internal_8cdc4365b870ec3c6b1115ce2cf787ce5c41e5a7e7b7c1b25e07e0befad49757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8cdc4365b870ec3c6b1115ce2cf787ce5c41e5a7e7b7c1b25e07e0befad49757->leave($__internal_8cdc4365b870ec3c6b1115ce2cf787ce5c41e5a7e7b7c1b25e07e0befad49757_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d91983c06f172bf5247155da6da91b01581064f1ad77e59142ed39757e78dea = $this->env->getExtension("native_profiler");
        $__internal_2d91983c06f172bf5247155da6da91b01581064f1ad77e59142ed39757e78dea->enter($__internal_2d91983c06f172bf5247155da6da91b01581064f1ad77e59142ed39757e78dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2d91983c06f172bf5247155da6da91b01581064f1ad77e59142ed39757e78dea->leave($__internal_2d91983c06f172bf5247155da6da91b01581064f1ad77e59142ed39757e78dea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b49e23c1d74f8a548ed249ddcbdde9cfa237802dbcc97efa52b71f1164c36d0 = $this->env->getExtension("native_profiler");
        $__internal_0b49e23c1d74f8a548ed249ddcbdde9cfa237802dbcc97efa52b71f1164c36d0->enter($__internal_0b49e23c1d74f8a548ed249ddcbdde9cfa237802dbcc97efa52b71f1164c36d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0b49e23c1d74f8a548ed249ddcbdde9cfa237802dbcc97efa52b71f1164c36d0->leave($__internal_0b49e23c1d74f8a548ed249ddcbdde9cfa237802dbcc97efa52b71f1164c36d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
