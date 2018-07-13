<?php

/* index.html */
class __TwigTemplate_c4bb9b0489d66282f3a7b75f6afb8842159cbbdce22579557c8f7be3850de5bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"content\">
    <ul>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["msgLists"]) ? $context["msgLists"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 7
            echo "        <li>
            <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "</p>
            <div>
                <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
            echo "</p>
                <span>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "createtime", array()), "html", null, true);
            echo "</span>
                <span><a href=\"index/show\">查看</a></span>
            </div>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  51 => 11,  47 => 10,  42 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}

{% block content %}
<div class=\"content\">
    <ul>
        {% for val in msgLists %}
        <li>
            <p>{{ val.title }}</p>
            <div>
                <p>{{ val.content }}</p>
                <span>{{ val.createtime }}</span>
                <span><a href=\"index/show\">查看</a></span>
            </div>
        </li>
        {% endfor %}
    </ul>
</div>
{% endblock %}



", "index.html", "D:\\wamp64\\www\\DIYKJ\\app\\view\\index.html");
    }
}
