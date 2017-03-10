<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b6b7ab0c894b68cae5b2d7dd489cf3eb6774a9079a04bc803c84fbb1dcb42fbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5d9b7d4233229e4ad6e1b67cf4aac3b794a5b88d9bb9b553783eb5b5a7a4f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d9b7d4233229e4ad6e1b67cf4aac3b794a5b88d9bb9b553783eb5b5a7a4f71->enter($__internal_b5d9b7d4233229e4ad6e1b67cf4aac3b794a5b88d9bb9b553783eb5b5a7a4f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b5d9b7d4233229e4ad6e1b67cf4aac3b794a5b88d9bb9b553783eb5b5a7a4f71->leave($__internal_b5d9b7d4233229e4ad6e1b67cf4aac3b794a5b88d9bb9b553783eb5b5a7a4f71_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
