<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7b8a9a4674e14dd4c6f485747c457ab120d98d1e1b5b04996fd347b9c728488b extends Twig_Template
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
        $__internal_a005a91e020d8a086b9b0a09dab1de1ff04a708978d04a984900a22ec8ef98e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a005a91e020d8a086b9b0a09dab1de1ff04a708978d04a984900a22ec8ef98e4->enter($__internal_a005a91e020d8a086b9b0a09dab1de1ff04a708978d04a984900a22ec8ef98e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a005a91e020d8a086b9b0a09dab1de1ff04a708978d04a984900a22ec8ef98e4->leave($__internal_a005a91e020d8a086b9b0a09dab1de1ff04a708978d04a984900a22ec8ef98e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
