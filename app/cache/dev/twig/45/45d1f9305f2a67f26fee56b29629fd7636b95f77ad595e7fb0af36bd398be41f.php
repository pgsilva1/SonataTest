<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6324cc992ef5b293417829136ab880ef0ea02b83d5779ab8772f3040c85d0880 extends Twig_Template
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
        $__internal_576ad748d0167e3d9c2c6558e1f3fd0d97098ec4665c6533701bca7015cc3b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576ad748d0167e3d9c2c6558e1f3fd0d97098ec4665c6533701bca7015cc3b9c->enter($__internal_576ad748d0167e3d9c2c6558e1f3fd0d97098ec4665c6533701bca7015cc3b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_576ad748d0167e3d9c2c6558e1f3fd0d97098ec4665c6533701bca7015cc3b9c->leave($__internal_576ad748d0167e3d9c2c6558e1f3fd0d97098ec4665c6533701bca7015cc3b9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
