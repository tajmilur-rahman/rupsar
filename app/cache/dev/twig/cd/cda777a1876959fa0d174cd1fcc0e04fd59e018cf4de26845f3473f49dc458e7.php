<?php

/* PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig */
class __TwigTemplate_fd170db097229a81f15b3c4571f60cb655d8b3db5c6c528f60734e877807d820 extends Twig_Template
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
        $__internal_9c1125d565c20a6892135b3e5759924e3a8628732d7e2f3dd6588d7e87b8b8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1125d565c20a6892135b3e5759924e3a8628732d7e2f3dd6588d7e87b8b8ee->enter($__internal_9c1125d565c20a6892135b3e5759924e3a8628732d7e2f3dd6588d7e87b8b8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig"));

        // line 25
        $context["buttonType"] = ((array_key_exists("buttonType", $context)) ? (_twig_default_filter((isset($context["buttonType"]) ? $context["buttonType"] : $this->getContext($context, "buttonType")), "primary")) : ("primary"));
        // line 26
        $context["right"] = ((array_key_exists("right", $context)) ? (_twig_default_filter((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), false)) : (false));
        // line 27
        echo "
<div class=\"";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("div_style", $context)) ? (_twig_default_filter((isset($context["div_style"]) ? $context["div_style"] : $this->getContext($context, "div_style")), "btn-group dropdown")) : ("btn-group dropdown")), "html", null, true);
        echo "\">

  ";
        // line 30
        if (array_key_exists("default_item", $context)) {
            // line 31
            echo "    <a
      href=\"";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "href", array()), "#")) : ("#")), "html", null, true);
            echo "\"
      title=\"";
            // line 33
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "title", array()), (($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", array()), "")) : ("")))), "html", null, true);
            echo "\"
      class=\"btn btn-";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["buttonType"]) ? $context["buttonType"] : $this->getContext($context, "buttonType")), "html", null, true);
            echo "\"
      ";
            // line 35
            if ((array_key_exists("disabled", $context) && ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")) == true))) {
                echo "disabled=\"disabled\"";
            }
            // line 36
            echo "    >
      ";
            // line 37
            if ($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : $this->getContext($context, "default_item")), "icon", array())) {
                // line 38
                echo "        <i class=\"material-icons\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : $this->getContext($context, "default_item")), "icon", array()), "html", null, true);
                echo "</i>
      ";
            }
            // line 40
            echo "      ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default_item"]) ? $context["default_item"] : null), "label", array()), "")) : ("")), "html", null, true);
            echo "
    </a>
  ";
        }
        // line 43
        echo "
  <button
    ";
        // line 45
        if ((isset($context["button_id"]) ? $context["button_id"] : $this->getContext($context, "button_id"))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["button_id"]) ? $context["button_id"] : $this->getContext($context, "button_id")), "html", null, true);
            echo "\"";
        }
        // line 46
        echo "    class=\"btn btn-";
        echo twig_escape_filter($this->env, (isset($context["buttonType"]) ? $context["buttonType"] : $this->getContext($context, "buttonType")), "html", null, true);
        echo " dropdown-toggle\"
    ";
        // line 47
        if ((array_key_exists("disabled", $context) && ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")) == true))) {
            echo "disabled=\"disabled\"";
        }
        // line 48
        echo "    data-toggle=\"dropdown\"
  >
    ";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("menu_label", $context)) ? (_twig_default_filter((isset($context["menu_label"]) ? $context["menu_label"] : $this->getContext($context, "menu_label")), "")) : ("")), "html", null, true);
        echo "
    <i class=\"";
        // line 51
        echo twig_escape_filter($this->env, ((array_key_exists("menu_icon", $context)) ? (_twig_default_filter((isset($context["menu_icon"]) ? $context["menu_icon"] : $this->getContext($context, "menu_icon")), "icon-caret-down")) : ("icon-caret-down")), "html", null, true);
        echo "\"></i>
  </button>

  <div class=\"dropdown-menu";
        // line 54
        if ((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right"))) {
            echo " dropdown-menu-right";
        }
        echo "\">
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 56
            echo "      ";
            if (($this->getAttribute($context["entry"], "divider", array(), "any", true, true) && ($this->getAttribute($context["entry"], "divider", array()) == true))) {
                // line 57
                echo "        <div class=\"dropdown-divider\"></div>
      ";
            } else {
                // line 59
                echo "        <a
          class=\"dropdown-item\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "href", array()), "#")) : ("#")), "html", null, true);
                echo "\"
          ";
                // line 61
                if ($this->getAttribute($context["entry"], "onclick", array(), "any", true, true)) {
                    echo "onclick=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "onclick", array()), "html", null, true);
                    echo "\"";
                }
                // line 62
                echo "          ";
                if ($this->getAttribute($context["entry"], "target", array(), "any", true, true)) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "target", array()), "html", null, true);
                    echo "\"";
                }
                // line 63
                echo "        >
          ";
                // line 64
                if ($this->getAttribute($context["entry"], "icon", array())) {
                    // line 65
                    echo "            <i class=\"material-icons\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "icon", array()), "html", null, true);
                    echo "</i>
          ";
                }
                // line 67
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["entry"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "label", array()), "")) : ("")), "html", null, true);
                echo "
        </a>
      ";
            }
            // line 70
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "  </div>

</div>
";
        
        $__internal_9c1125d565c20a6892135b3e5759924e3a8628732d7e2f3dd6588d7e87b8b8ee->leave($__internal_9c1125d565c20a6892135b3e5759924e3a8628732d7e2f3dd6588d7e87b8b8ee_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 71,  161 => 70,  154 => 67,  148 => 65,  146 => 64,  143 => 63,  136 => 62,  130 => 61,  126 => 60,  123 => 59,  119 => 57,  116 => 56,  112 => 55,  106 => 54,  100 => 51,  96 => 50,  92 => 48,  88 => 47,  83 => 46,  77 => 45,  73 => 43,  66 => 40,  60 => 38,  58 => 37,  55 => 36,  51 => 35,  47 => 34,  43 => 33,  39 => 32,  36 => 31,  34 => 30,  29 => 28,  26 => 27,  24 => 26,  22 => 25,);
    }

    public function getSource()
    {
        return "{#**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% set buttonType = buttonType|default('primary') %}
{% set right = right|default(false) %}

<div class=\"{{ div_style|default(\"btn-group dropdown\") }}\">

  {% if default_item is defined %}
    <a
      href=\"{{ default_item.href|default(\"#\") }}\"
      title=\"{{ default_item.title|default(default_item.label|default(\"\")) }}\"
      class=\"btn btn-{{ buttonType }}\"
      {% if disabled is defined and disabled == true %}disabled=\"disabled\"{% endif %}
    >
      {% if default_item.icon %}
        <i class=\"material-icons\">{{ default_item.icon }}</i>
      {% endif %}
      {{ default_item.label|default('') }}
    </a>
  {% endif %}

  <button
    {% if button_id %}id=\"{{ button_id }}\"{% endif %}
    class=\"btn btn-{{ buttonType }} dropdown-toggle\"
    {% if disabled is defined and disabled == true %}disabled=\"disabled\"{% endif %}
    data-toggle=\"dropdown\"
  >
    {{ menu_label|default('') }}
    <i class=\"{{ menu_icon|default(\"icon-caret-down\") }}\"></i>
  </button>

  <div class=\"dropdown-menu{% if right %} dropdown-menu-right{% endif %}\">
    {% for entry in items %}
      {% if entry.divider is defined and entry.divider==true %}
        <div class=\"dropdown-divider\"></div>
      {% else %}
        <a
          class=\"dropdown-item\" href=\"{{ entry.href|default(\"#\") }}\"
          {% if entry.onclick is defined %}onclick=\"{{ entry.onclick }}\"{% endif %}
          {% if entry.target is defined %}target=\"{{ entry.target }}\"{% endif %}
        >
          {% if entry.icon %}
            <i class=\"material-icons\">{{ entry.icon }}</i>
          {% endif %}
          {{ entry.label|default('') }}
        </a>
      {% endif %}
    {% endfor %}
  </div>

</div>
";
    }
}
