<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_32b86cfa94b857c1a83bbd90ad54a4a816ae88466a2318f8c8ec39113550a58c extends Twig_Template
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
        $__internal_4606ec29b5404d902a73eb6cfc72c05def363d3b19e5bd51c958bcba83c2e590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4606ec29b5404d902a73eb6cfc72c05def363d3b19e5bd51c958bcba83c2e590->enter($__internal_4606ec29b5404d902a73eb6cfc72c05def363d3b19e5bd51c958bcba83c2e590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4606ec29b5404d902a73eb6cfc72c05def363d3b19e5bd51c958bcba83c2e590->leave($__internal_4606ec29b5404d902a73eb6cfc72c05def363d3b19e5bd51c958bcba83c2e590_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
