<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_66db730d1fc96be74d8d762d4b80cc0b2f39859804153932ef12facd2028f1df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f70fa9211802a57680e4a420270520bf304f562396caa9f9931c66d2b96f32ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70fa9211802a57680e4a420270520bf304f562396caa9f9931c66d2b96f32ee->enter($__internal_f70fa9211802a57680e4a420270520bf304f562396caa9f9931c66d2b96f32ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f70fa9211802a57680e4a420270520bf304f562396caa9f9931c66d2b96f32ee->leave($__internal_f70fa9211802a57680e4a420270520bf304f562396caa9f9931c66d2b96f32ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b50783e6d8420be6dcf68f06d740491b09457f19417a98423ec49fe3bf1980c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50783e6d8420be6dcf68f06d740491b09457f19417a98423ec49fe3bf1980c5->enter($__internal_b50783e6d8420be6dcf68f06d740491b09457f19417a98423ec49fe3bf1980c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b50783e6d8420be6dcf68f06d740491b09457f19417a98423ec49fe3bf1980c5->leave($__internal_b50783e6d8420be6dcf68f06d740491b09457f19417a98423ec49fe3bf1980c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_28c0f256df3b49d5334aaef89991edb05f23ce7ef78af35f530b0bd916b4468b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c0f256df3b49d5334aaef89991edb05f23ce7ef78af35f530b0bd916b4468b->enter($__internal_28c0f256df3b49d5334aaef89991edb05f23ce7ef78af35f530b0bd916b4468b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_28c0f256df3b49d5334aaef89991edb05f23ce7ef78af35f530b0bd916b4468b->leave($__internal_28c0f256df3b49d5334aaef89991edb05f23ce7ef78af35f530b0bd916b4468b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_42100c0cfb293241e030a97f420602cae0d95380fc134319b05fadb1d5f9e246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42100c0cfb293241e030a97f420602cae0d95380fc134319b05fadb1d5f9e246->enter($__internal_42100c0cfb293241e030a97f420602cae0d95380fc134319b05fadb1d5f9e246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_42100c0cfb293241e030a97f420602cae0d95380fc134319b05fadb1d5f9e246->leave($__internal_42100c0cfb293241e030a97f420602cae0d95380fc134319b05fadb1d5f9e246_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
