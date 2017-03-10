<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_567df8d9d27bbec7f558f09a98cc5cfef57d9dd81d7a64b9bd2a399d2f00082c extends Twig_Template
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
        $__internal_bc8afebc91b01130e80fe6c2232c6de0f60bdb6b08d35f6e1d5b1624dbdfb0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8afebc91b01130e80fe6c2232c6de0f60bdb6b08d35f6e1d5b1624dbdfb0ce->enter($__internal_bc8afebc91b01130e80fe6c2232c6de0f60bdb6b08d35f6e1d5b1624dbdfb0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bc8afebc91b01130e80fe6c2232c6de0f60bdb6b08d35f6e1d5b1624dbdfb0ce->leave($__internal_bc8afebc91b01130e80fe6c2232c6de0f60bdb6b08d35f6e1d5b1624dbdfb0ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
