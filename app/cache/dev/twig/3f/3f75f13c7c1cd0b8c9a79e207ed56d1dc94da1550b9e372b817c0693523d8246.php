<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig */
class __TwigTemplate_6ec70c725f2196f27f35b523bd37c07cd5189c4274b1993d633c719f90c39166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_972ce3bf6067312f7f917ad56eecc7763ca9ec6d44301dd659ce6a9fe9486468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972ce3bf6067312f7f917ad56eecc7763ca9ec6d44301dd659ce6a9fe9486468->enter($__internal_972ce3bf6067312f7f917ad56eecc7763ca9ec6d44301dd659ce6a9fe9486468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig"));

        // line 27
        $this->displayBlock('form_widget', $context, $blocks);
        // line 35
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 40
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 50
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 61
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 69
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 78
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 98
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 112
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 117
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 121
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 134
        $this->displayBlock('date_widget', $context, $blocks);
        // line 148
        $this->displayBlock('time_widget', $context, $blocks);
        // line 159
        $this->displayBlock('number_widget', $context, $blocks);
        // line 165
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 170
        $this->displayBlock('money_widget', $context, $blocks);
        // line 174
        $this->displayBlock('url_widget', $context, $blocks);
        // line 179
        $this->displayBlock('search_widget', $context, $blocks);
        // line 184
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 189
        $this->displayBlock('password_widget', $context, $blocks);
        // line 194
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 199
        $this->displayBlock('email_widget', $context, $blocks);
        // line 204
        $this->displayBlock('button_widget', $context, $blocks);
        // line 218
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 223
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 230
        $this->displayBlock('form_label', $context, $blocks);
        // line 256
        $this->displayBlock('button_label', $context, $blocks);
        // line 260
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 268
        $this->displayBlock('form_row', $context, $blocks);
        // line 276
        $this->displayBlock('button_row', $context, $blocks);
        // line 282
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 288
        $this->displayBlock('form', $context, $blocks);
        // line 294
        $this->displayBlock('form_start', $context, $blocks);
        // line 307
        $this->displayBlock('form_end', $context, $blocks);
        // line 314
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 318
        $this->displayBlock('form_errors', $context, $blocks);
        // line 328
        $this->displayBlock('form_rest', $context, $blocks);
        // line 335
        echo "
";
        // line 338
        $this->displayBlock('form_rows', $context, $blocks);
        // line 344
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 361
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 375
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 389
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_972ce3bf6067312f7f917ad56eecc7763ca9ec6d44301dd659ce6a9fe9486468->leave($__internal_972ce3bf6067312f7f917ad56eecc7763ca9ec6d44301dd659ce6a9fe9486468_prof);

    }

    // line 27
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_f66bb0cced10331c8a8ecaec32aba6e357e16a15a8c267c21630a4ed4575f03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66bb0cced10331c8a8ecaec32aba6e357e16a15a8c267c21630a4ed4575f03a->enter($__internal_f66bb0cced10331c8a8ecaec32aba6e357e16a15a8c267c21630a4ed4575f03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 28
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 29
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_f66bb0cced10331c8a8ecaec32aba6e357e16a15a8c267c21630a4ed4575f03a->leave($__internal_f66bb0cced10331c8a8ecaec32aba6e357e16a15a8c267c21630a4ed4575f03a_prof);

    }

    // line 35
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_cc4d4fb971b4cb6a87dd4af851b22564361540977ec363e4638a18ef3cf2bf10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4d4fb971b4cb6a87dd4af851b22564361540977ec363e4638a18ef3cf2bf10->enter($__internal_cc4d4fb971b4cb6a87dd4af851b22564361540977ec363e4638a18ef3cf2bf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 36
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 37
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_cc4d4fb971b4cb6a87dd4af851b22564361540977ec363e4638a18ef3cf2bf10->leave($__internal_cc4d4fb971b4cb6a87dd4af851b22564361540977ec363e4638a18ef3cf2bf10_prof);

    }

    // line 40
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_41301eab246170c0ee9be1f3fa4cdc50653923be9649dfdad2d39f4c8c08ab54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41301eab246170c0ee9be1f3fa4cdc50653923be9649dfdad2d39f4c8c08ab54->enter($__internal_41301eab246170c0ee9be1f3fa4cdc50653923be9649dfdad2d39f4c8c08ab54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 41
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 42
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 45
        $this->displayBlock("form_rows", $context, $blocks);
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 47
        echo "</div>";
        
        $__internal_41301eab246170c0ee9be1f3fa4cdc50653923be9649dfdad2d39f4c8c08ab54->leave($__internal_41301eab246170c0ee9be1f3fa4cdc50653923be9649dfdad2d39f4c8c08ab54_prof);

    }

    // line 50
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_b515c9262bc98a57833df5b1f2b98c8c7344e4f7b097fd7b863c6ce61d61d2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b515c9262bc98a57833df5b1f2b98c8c7344e4f7b097fd7b863c6ce61d61d2f0->enter($__internal_b515c9262bc98a57833df5b1f2b98c8c7344e4f7b097fd7b863c6ce61d61d2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 51
        if (array_key_exists("prototype", $context)) {
            // line 52
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 54
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_b515c9262bc98a57833df5b1f2b98c8c7344e4f7b097fd7b863c6ce61d61d2f0->leave($__internal_b515c9262bc98a57833df5b1f2b98c8c7344e4f7b097fd7b863c6ce61d61d2f0_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_35fc9bcc0e57fdf8da81b18f63fc542810c1f37c1edd384e7bdd6fc6733cca4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fc9bcc0e57fdf8da81b18f63fc542810c1f37c1edd384e7bdd6fc6733cca4d->enter($__internal_35fc9bcc0e57fdf8da81b18f63fc542810c1f37c1edd384e7bdd6fc6733cca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_35fc9bcc0e57fdf8da81b18f63fc542810c1f37c1edd384e7bdd6fc6733cca4d->leave($__internal_35fc9bcc0e57fdf8da81b18f63fc542810c1f37c1edd384e7bdd6fc6733cca4d_prof);

    }

    // line 61
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_6a10927e9bf612594229398f2eafb1e43c05f0acc82f9924527af9e6dab45367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a10927e9bf612594229398f2eafb1e43c05f0acc82f9924527af9e6dab45367->enter($__internal_6a10927e9bf612594229398f2eafb1e43c05f0acc82f9924527af9e6dab45367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 62
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 63
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 65
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_6a10927e9bf612594229398f2eafb1e43c05f0acc82f9924527af9e6dab45367->leave($__internal_6a10927e9bf612594229398f2eafb1e43c05f0acc82f9924527af9e6dab45367_prof);

    }

    // line 69
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b94a3f141c0f672d31025b278571a9cdb0c3c46460aec8b42e2f49819643bc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94a3f141c0f672d31025b278571a9cdb0c3c46460aec8b42e2f49819643bc88->enter($__internal_b94a3f141c0f672d31025b278571a9cdb0c3c46460aec8b42e2f49819643bc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 70
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>";
        
        $__internal_b94a3f141c0f672d31025b278571a9cdb0c3c46460aec8b42e2f49819643bc88->leave($__internal_b94a3f141c0f672d31025b278571a9cdb0c3c46460aec8b42e2f49819643bc88_prof);

    }

    // line 78
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_33608d5748dc582837b3a73cffdbc9933f04aee29fbfac50aa97323e937a555d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33608d5748dc582837b3a73cffdbc9933f04aee29fbfac50aa97323e937a555d->enter($__internal_33608d5748dc582837b3a73cffdbc9933f04aee29fbfac50aa97323e937a555d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 79
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 80
            $context["required"] = false;
        }
        // line 82
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " data-toggle=\"select2\">";
        // line 83
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 84
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 86
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 87
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 88
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 89
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 90
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 93
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 94
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 95
        echo "</select>";
        
        $__internal_33608d5748dc582837b3a73cffdbc9933f04aee29fbfac50aa97323e937a555d->leave($__internal_33608d5748dc582837b3a73cffdbc9933f04aee29fbfac50aa97323e937a555d_prof);

    }

    // line 98
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_15717bd8cf980ffe190b472037b884484cf7f8ba46058d2bb5ef6f9b4da30d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15717bd8cf980ffe190b472037b884484cf7f8ba46058d2bb5ef6f9b4da30d9d->enter($__internal_15717bd8cf980ffe190b472037b884484cf7f8ba46058d2bb5ef6f9b4da30d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 100
            if (twig_test_iterable($context["choice"])) {
                // line 101
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($context["group_label"])), "html", null, true);
                echo "\">
                ";
                // line 102
                $context["options"] = $context["choice"];
                // line 103
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 104
                echo "</optgroup>";
            } else {
                // line 106
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 107
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->getAttribute($context["choice"], "label", array()))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_15717bd8cf980ffe190b472037b884484cf7f8ba46058d2bb5ef6f9b4da30d9d->leave($__internal_15717bd8cf980ffe190b472037b884484cf7f8ba46058d2bb5ef6f9b4da30d9d_prof);

    }

    // line 112
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_cb8459d9eeccc84a6046b0e6e2bea9be218163795136678af93960fc10161ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8459d9eeccc84a6046b0e6e2bea9be218163795136678af93960fc10161ab6->enter($__internal_cb8459d9eeccc84a6046b0e6e2bea9be218163795136678af93960fc10161ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 113
        $context["switch"] = ((array_key_exists("switch", $context)) ? (_twig_default_filter((isset($context["switch"]) ? $context["switch"] : $this->getContext($context, "switch")), "")) : (""));
        // line 114
        echo "<input type=\"checkbox\" ";
        if ((isset($context["switch"]) ? $context["switch"] : $this->getContext($context, "switch"))) {
            echo "data-toggle=\"switch\"";
        }
        echo " ";
        if ((isset($context["switch"]) ? $context["switch"] : $this->getContext($context, "switch"))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["switch"]) ? $context["switch"] : $this->getContext($context, "switch")), "html", null, true);
            echo "\"";
        }
        echo " ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_cb8459d9eeccc84a6046b0e6e2bea9be218163795136678af93960fc10161ab6->leave($__internal_cb8459d9eeccc84a6046b0e6e2bea9be218163795136678af93960fc10161ab6_prof);

    }

    // line 117
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_253c07e86034e41873e7a6e466b153363c931b4e98cce588bc823840a8b31067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253c07e86034e41873e7a6e466b153363c931b4e98cce588bc823840a8b31067->enter($__internal_253c07e86034e41873e7a6e466b153363c931b4e98cce588bc823840a8b31067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 118
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_253c07e86034e41873e7a6e466b153363c931b4e98cce588bc823840a8b31067->leave($__internal_253c07e86034e41873e7a6e466b153363c931b4e98cce588bc823840a8b31067_prof);

    }

    // line 121
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_a8eb726fce8c35c6a5968e52de68366396f4aac9c29441747d061b1490673302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8eb726fce8c35c6a5968e52de68366396f4aac9c29441747d061b1490673302->enter($__internal_a8eb726fce8c35c6a5968e52de68366396f4aac9c29441747d061b1490673302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 122
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 123
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 125
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 129
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 130
            echo "</div>";
        }
        
        $__internal_a8eb726fce8c35c6a5968e52de68366396f4aac9c29441747d061b1490673302->leave($__internal_a8eb726fce8c35c6a5968e52de68366396f4aac9c29441747d061b1490673302_prof);

    }

    // line 134
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8c27c36051856e7cf41aabcc3878018b31d041087e5ee58a69c7c7756355aa78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c27c36051856e7cf41aabcc3878018b31d041087e5ee58a69c7c7756355aa78->enter($__internal_8c27c36051856e7cf41aabcc3878018b31d041087e5ee58a69c7c7756355aa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 135
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 136
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 138
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 139
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 140
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 141
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 142
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 144
            echo "</div>";
        }
        
        $__internal_8c27c36051856e7cf41aabcc3878018b31d041087e5ee58a69c7c7756355aa78->leave($__internal_8c27c36051856e7cf41aabcc3878018b31d041087e5ee58a69c7c7756355aa78_prof);

    }

    // line 148
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_36c3795a42a455c06eac8b627a6f579fb539522b3855a80d0a70b4704f032936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c3795a42a455c06eac8b627a6f579fb539522b3855a80d0a70b4704f032936->enter($__internal_36c3795a42a455c06eac8b627a6f579fb539522b3855a80d0a70b4704f032936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 149
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 150
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 152
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 153
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 154
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 155
            echo "        </div>";
        }
        
        $__internal_36c3795a42a455c06eac8b627a6f579fb539522b3855a80d0a70b4704f032936->leave($__internal_36c3795a42a455c06eac8b627a6f579fb539522b3855a80d0a70b4704f032936_prof);

    }

    // line 159
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_894a38beb0e1c7b770ad7713c1206f9c4a0f0efc061ccc49299f7742e918c051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894a38beb0e1c7b770ad7713c1206f9c4a0f0efc061ccc49299f7742e918c051->enter($__internal_894a38beb0e1c7b770ad7713c1206f9c4a0f0efc061ccc49299f7742e918c051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 161
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 162
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_894a38beb0e1c7b770ad7713c1206f9c4a0f0efc061ccc49299f7742e918c051->leave($__internal_894a38beb0e1c7b770ad7713c1206f9c4a0f0efc061ccc49299f7742e918c051_prof);

    }

    // line 165
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_3742992ba90fff0e3ca44c5e5a9e1211a708133897e370cb76da0659888425c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3742992ba90fff0e3ca44c5e5a9e1211a708133897e370cb76da0659888425c8->enter($__internal_3742992ba90fff0e3ca44c5e5a9e1211a708133897e370cb76da0659888425c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 166
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 167
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3742992ba90fff0e3ca44c5e5a9e1211a708133897e370cb76da0659888425c8->leave($__internal_3742992ba90fff0e3ca44c5e5a9e1211a708133897e370cb76da0659888425c8_prof);

    }

    // line 170
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d7d7690e8885d145d87d02e418b41a0eb2eadc24a9f84fb12577c6150e20f3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d7690e8885d145d87d02e418b41a0eb2eadc24a9f84fb12577c6150e20f3dd->enter($__internal_d7d7690e8885d145d87d02e418b41a0eb2eadc24a9f84fb12577c6150e20f3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 171
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_d7d7690e8885d145d87d02e418b41a0eb2eadc24a9f84fb12577c6150e20f3dd->leave($__internal_d7d7690e8885d145d87d02e418b41a0eb2eadc24a9f84fb12577c6150e20f3dd_prof);

    }

    // line 174
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_31b5023338314a665878bffdde672bdd1f2af54265b1e6e813454a125c09f971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b5023338314a665878bffdde672bdd1f2af54265b1e6e813454a125c09f971->enter($__internal_31b5023338314a665878bffdde672bdd1f2af54265b1e6e813454a125c09f971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_31b5023338314a665878bffdde672bdd1f2af54265b1e6e813454a125c09f971->leave($__internal_31b5023338314a665878bffdde672bdd1f2af54265b1e6e813454a125c09f971_prof);

    }

    // line 179
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_3d08700ca296ed752648f52a781321aa99882b6b57cde91866c491e0a23dffb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d08700ca296ed752648f52a781321aa99882b6b57cde91866c491e0a23dffb2->enter($__internal_3d08700ca296ed752648f52a781321aa99882b6b57cde91866c491e0a23dffb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 181
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3d08700ca296ed752648f52a781321aa99882b6b57cde91866c491e0a23dffb2->leave($__internal_3d08700ca296ed752648f52a781321aa99882b6b57cde91866c491e0a23dffb2_prof);

    }

    // line 184
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_bca6e36aab671e2d90732c41b7d55e27d87ff2b260904a94dd41562a0f04a906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca6e36aab671e2d90732c41b7d55e27d87ff2b260904a94dd41562a0f04a906->enter($__internal_bca6e36aab671e2d90732c41b7d55e27d87ff2b260904a94dd41562a0f04a906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 185
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 186
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_bca6e36aab671e2d90732c41b7d55e27d87ff2b260904a94dd41562a0f04a906->leave($__internal_bca6e36aab671e2d90732c41b7d55e27d87ff2b260904a94dd41562a0f04a906_prof);

    }

    // line 189
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_fd16890c0b1f7428618348e010bbd2ec4a9c9303216671503c1705b976236631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd16890c0b1f7428618348e010bbd2ec4a9c9303216671503c1705b976236631->enter($__internal_fd16890c0b1f7428618348e010bbd2ec4a9c9303216671503c1705b976236631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 190
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 191
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fd16890c0b1f7428618348e010bbd2ec4a9c9303216671503c1705b976236631->leave($__internal_fd16890c0b1f7428618348e010bbd2ec4a9c9303216671503c1705b976236631_prof);

    }

    // line 194
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_dfdf04275781ce27a2bd2821f5a58fa685a30ee61f035dbfb822a82f2d5a8192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdf04275781ce27a2bd2821f5a58fa685a30ee61f035dbfb822a82f2d5a8192->enter($__internal_dfdf04275781ce27a2bd2821f5a58fa685a30ee61f035dbfb822a82f2d5a8192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 195
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 196
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_dfdf04275781ce27a2bd2821f5a58fa685a30ee61f035dbfb822a82f2d5a8192->leave($__internal_dfdf04275781ce27a2bd2821f5a58fa685a30ee61f035dbfb822a82f2d5a8192_prof);

    }

    // line 199
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_6a50f320ed55377877b4594883695966b2f2a0c0264b505993a49b9e6f7fb138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a50f320ed55377877b4594883695966b2f2a0c0264b505993a49b9e6f7fb138->enter($__internal_6a50f320ed55377877b4594883695966b2f2a0c0264b505993a49b9e6f7fb138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 200
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 201
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6a50f320ed55377877b4594883695966b2f2a0c0264b505993a49b9e6f7fb138->leave($__internal_6a50f320ed55377877b4594883695966b2f2a0c0264b505993a49b9e6f7fb138_prof);

    }

    // line 204
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1d7e6d9bdadd54930c810980b8a2bd166a88884e79735c58d225dc6f964a51fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7e6d9bdadd54930c810980b8a2bd166a88884e79735c58d225dc6f964a51fe->enter($__internal_1d7e6d9bdadd54930c810980b8a2bd166a88884e79735c58d225dc6f964a51fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 205
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 206
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 207
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 212
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 215
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "</button>";
        
        $__internal_1d7e6d9bdadd54930c810980b8a2bd166a88884e79735c58d225dc6f964a51fe->leave($__internal_1d7e6d9bdadd54930c810980b8a2bd166a88884e79735c58d225dc6f964a51fe_prof);

    }

    // line 218
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_056f4f6d539fc47de518362b5126d91955995db78d2509f0e66895f05060dd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056f4f6d539fc47de518362b5126d91955995db78d2509f0e66895f05060dd2b->enter($__internal_056f4f6d539fc47de518362b5126d91955995db78d2509f0e66895f05060dd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 219
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 220
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_056f4f6d539fc47de518362b5126d91955995db78d2509f0e66895f05060dd2b->leave($__internal_056f4f6d539fc47de518362b5126d91955995db78d2509f0e66895f05060dd2b_prof);

    }

    // line 223
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_4e7a5b940c558ffb9a0c62d46e1d38e6c71f8c577f52a55760b81b944402ab88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7a5b940c558ffb9a0c62d46e1d38e6c71f8c577f52a55760b81b944402ab88->enter($__internal_4e7a5b940c558ffb9a0c62d46e1d38e6c71f8c577f52a55760b81b944402ab88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 224
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 225
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_4e7a5b940c558ffb9a0c62d46e1d38e6c71f8c577f52a55760b81b944402ab88->leave($__internal_4e7a5b940c558ffb9a0c62d46e1d38e6c71f8c577f52a55760b81b944402ab88_prof);

    }

    // line 230
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2d9aa7ecc01bc9a59349f32646dcc55bb4c512a8bd7e3e0b7432b2ede2035ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9aa7ecc01bc9a59349f32646dcc55bb4c512a8bd7e3e0b7432b2ede2035ac5->enter($__internal_2d9aa7ecc01bc9a59349f32646dcc55bb4c512a8bd7e3e0b7432b2ede2035ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 231
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 232
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 233
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 235
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 236
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 238
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 239
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 240
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 241
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 242
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 245
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 248
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
            echo "</label>
        ";
            // line 249
            if ($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "tooltip", array(), "array", true, true)) {
                // line 250
                echo "            ";
                $context["placement"] = (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "tooltip_placement", array(), "array", true, true)) ? ($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "tooltip_placement", array(), "array")) : ("top"));
                // line 251
                echo "            <i class=\"icon-question\" data-toggle=\"tooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, (isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "tooltip", array(), "array"), "html", null, true);
                echo "\"></i>
        ";
            }
        }
        
        $__internal_2d9aa7ecc01bc9a59349f32646dcc55bb4c512a8bd7e3e0b7432b2ede2035ac5->leave($__internal_2d9aa7ecc01bc9a59349f32646dcc55bb4c512a8bd7e3e0b7432b2ede2035ac5_prof);

    }

    // line 256
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_42a2a71d93c8d83b2202e56cae71cff22c25b9430a92e44b09f2caeac2e54329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a2a71d93c8d83b2202e56cae71cff22c25b9430a92e44b09f2caeac2e54329->enter($__internal_42a2a71d93c8d83b2202e56cae71cff22c25b9430a92e44b09f2caeac2e54329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_42a2a71d93c8d83b2202e56cae71cff22c25b9430a92e44b09f2caeac2e54329->leave($__internal_42a2a71d93c8d83b2202e56cae71cff22c25b9430a92e44b09f2caeac2e54329_prof);

    }

    // line 260
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_096c74f1322e6db8c2f4b57d34b858fabb30f9cecc17be35b6111aa6a24a0977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096c74f1322e6db8c2f4b57d34b858fabb30f9cecc17be35b6111aa6a24a0977->enter($__internal_096c74f1322e6db8c2f4b57d34b858fabb30f9cecc17be35b6111aa6a24a0977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 265
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_096c74f1322e6db8c2f4b57d34b858fabb30f9cecc17be35b6111aa6a24a0977->leave($__internal_096c74f1322e6db8c2f4b57d34b858fabb30f9cecc17be35b6111aa6a24a0977_prof);

    }

    // line 268
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bf10958c67f56d81b47d362957858e6c58f37ca893e364064c7fff59d2028067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf10958c67f56d81b47d362957858e6c58f37ca893e364064c7fff59d2028067->enter($__internal_bf10958c67f56d81b47d362957858e6c58f37ca893e364064c7fff59d2028067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 269
        echo "<div>";
        // line 270
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 272
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 273
        echo "</div>";
        
        $__internal_bf10958c67f56d81b47d362957858e6c58f37ca893e364064c7fff59d2028067->leave($__internal_bf10958c67f56d81b47d362957858e6c58f37ca893e364064c7fff59d2028067_prof);

    }

    // line 276
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_09f6c39dbe47de7f0d3cf9d0f446ad2658d826f61e1573ed4ecc4e14980087aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f6c39dbe47de7f0d3cf9d0f446ad2658d826f61e1573ed4ecc4e14980087aa->enter($__internal_09f6c39dbe47de7f0d3cf9d0f446ad2658d826f61e1573ed4ecc4e14980087aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 277
        echo "<div>";
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 279
        echo "</div>";
        
        $__internal_09f6c39dbe47de7f0d3cf9d0f446ad2658d826f61e1573ed4ecc4e14980087aa->leave($__internal_09f6c39dbe47de7f0d3cf9d0f446ad2658d826f61e1573ed4ecc4e14980087aa_prof);

    }

    // line 282
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_2a7665da6d8d54a78fc512b4fa880724cc8c260a2c1671a26bcd3bf19b5dc445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7665da6d8d54a78fc512b4fa880724cc8c260a2c1671a26bcd3bf19b5dc445->enter($__internal_2a7665da6d8d54a78fc512b4fa880724cc8c260a2c1671a26bcd3bf19b5dc445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 283
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_2a7665da6d8d54a78fc512b4fa880724cc8c260a2c1671a26bcd3bf19b5dc445->leave($__internal_2a7665da6d8d54a78fc512b4fa880724cc8c260a2c1671a26bcd3bf19b5dc445_prof);

    }

    // line 288
    public function block_form($context, array $blocks = array())
    {
        $__internal_571989ff83072e49a848bffaae86792ed7dc73ff88bcd19c078e3b9da7308d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571989ff83072e49a848bffaae86792ed7dc73ff88bcd19c078e3b9da7308d59->enter($__internal_571989ff83072e49a848bffaae86792ed7dc73ff88bcd19c078e3b9da7308d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 289
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 291
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_571989ff83072e49a848bffaae86792ed7dc73ff88bcd19c078e3b9da7308d59->leave($__internal_571989ff83072e49a848bffaae86792ed7dc73ff88bcd19c078e3b9da7308d59_prof);

    }

    // line 294
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_659647a1fc5ea36452ec8dfe17bd4889876e832bf9e98fe61968324f39a85042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659647a1fc5ea36452ec8dfe17bd4889876e832bf9e98fe61968324f39a85042->enter($__internal_659647a1fc5ea36452ec8dfe17bd4889876e832bf9e98fe61968324f39a85042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 295
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 296
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 297
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 299
            $context["form_method"] = "POST";
        }
        // line 301
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 302
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 303
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_659647a1fc5ea36452ec8dfe17bd4889876e832bf9e98fe61968324f39a85042->leave($__internal_659647a1fc5ea36452ec8dfe17bd4889876e832bf9e98fe61968324f39a85042_prof);

    }

    // line 307
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_7ae2fce77b080c0dfbb795add19573da956e239b96a0b84ae232bd093b491f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae2fce77b080c0dfbb795add19573da956e239b96a0b84ae232bd093b491f0d->enter($__internal_7ae2fce77b080c0dfbb795add19573da956e239b96a0b84ae232bd093b491f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 308
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 309
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 311
        echo "</form>";
        
        $__internal_7ae2fce77b080c0dfbb795add19573da956e239b96a0b84ae232bd093b491f0d->leave($__internal_7ae2fce77b080c0dfbb795add19573da956e239b96a0b84ae232bd093b491f0d_prof);

    }

    // line 314
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_f45f5bb8b5e7af1d35d85e83d52a022443a1c9f7bcbaefdaff6850b28d2752fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45f5bb8b5e7af1d35d85e83d52a022443a1c9f7bcbaefdaff6850b28d2752fd->enter($__internal_f45f5bb8b5e7af1d35d85e83d52a022443a1c9f7bcbaefdaff6850b28d2752fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 315
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_f45f5bb8b5e7af1d35d85e83d52a022443a1c9f7bcbaefdaff6850b28d2752fd->leave($__internal_f45f5bb8b5e7af1d35d85e83d52a022443a1c9f7bcbaefdaff6850b28d2752fd_prof);

    }

    // line 318
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_afae3f3b12b1d70a050b94e80d1411cf27d17c896e78e83f20ea826d90b3f33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afae3f3b12b1d70a050b94e80d1411cf27d17c896e78e83f20ea826d90b3f33a->enter($__internal_afae3f3b12b1d70a050b94e80d1411cf27d17c896e78e83f20ea826d90b3f33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 319
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 320
            echo "<ul>";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 322
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 324
            echo "</ul>";
        }
        
        $__internal_afae3f3b12b1d70a050b94e80d1411cf27d17c896e78e83f20ea826d90b3f33a->leave($__internal_afae3f3b12b1d70a050b94e80d1411cf27d17c896e78e83f20ea826d90b3f33a_prof);

    }

    // line 328
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_bdced38e5eb91ce3c3eba61644644e79f6a595c0047161d05a83097660dc4986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdced38e5eb91ce3c3eba61644644e79f6a595c0047161d05a83097660dc4986->enter($__internal_bdced38e5eb91ce3c3eba61644644e79f6a595c0047161d05a83097660dc4986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 330
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 331
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bdced38e5eb91ce3c3eba61644644e79f6a595c0047161d05a83097660dc4986->leave($__internal_bdced38e5eb91ce3c3eba61644644e79f6a595c0047161d05a83097660dc4986_prof);

    }

    // line 338
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_96913f8d6cdb8a1539b6ea9dbbbf0b52025823e906a153f6fdf1553a291ee828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96913f8d6cdb8a1539b6ea9dbbbf0b52025823e906a153f6fdf1553a291ee828->enter($__internal_96913f8d6cdb8a1539b6ea9dbbbf0b52025823e906a153f6fdf1553a291ee828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 340
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_96913f8d6cdb8a1539b6ea9dbbbf0b52025823e906a153f6fdf1553a291ee828->leave($__internal_96913f8d6cdb8a1539b6ea9dbbbf0b52025823e906a153f6fdf1553a291ee828_prof);

    }

    // line 344
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_56c6c38b0f89f4607c3d88b1f0146db68b25fdc087f649ac0d45fe720b3db4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c6c38b0f89f4607c3d88b1f0146db68b25fdc087f649ac0d45fe720b3db4c8->enter($__internal_56c6c38b0f89f4607c3d88b1f0146db68b25fdc087f649ac0d45fe720b3db4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 345
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 346
        if (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")) &&  !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "readonly", array(), "any", true, true))) {
            echo " readonly=\"readonly\"";
        }
        // line 347
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 348
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 350
            echo " ";
            // line 351
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 352
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 353
$context["attrvalue"] === true)) {
                // line 354
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 355
$context["attrvalue"] === false)) {
                // line 356
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_56c6c38b0f89f4607c3d88b1f0146db68b25fdc087f649ac0d45fe720b3db4c8->leave($__internal_56c6c38b0f89f4607c3d88b1f0146db68b25fdc087f649ac0d45fe720b3db4c8_prof);

    }

    // line 361
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_3a8b46c33970f81871a931ac019935ddb92197e266a7d156046a6194b0dc551d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8b46c33970f81871a931ac019935ddb92197e266a7d156046a6194b0dc551d->enter($__internal_3a8b46c33970f81871a931ac019935ddb92197e266a7d156046a6194b0dc551d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 362
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 363
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 364
            echo " ";
            // line 365
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 367
$context["attrvalue"] === true)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 369
$context["attrvalue"] === false)) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3a8b46c33970f81871a931ac019935ddb92197e266a7d156046a6194b0dc551d->leave($__internal_3a8b46c33970f81871a931ac019935ddb92197e266a7d156046a6194b0dc551d_prof);

    }

    // line 375
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_09b753bb15b57ada21247f83eeebcc47a5c371c290451251feedf20d4c2fe0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b753bb15b57ada21247f83eeebcc47a5c371c290451251feedf20d4c2fe0b7->enter($__internal_09b753bb15b57ada21247f83eeebcc47a5c371c290451251feedf20d4c2fe0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 378
            echo " ";
            // line 379
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 380
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 381
$context["attrvalue"] === true)) {
                // line 382
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 383
$context["attrvalue"] === false)) {
                // line 384
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_09b753bb15b57ada21247f83eeebcc47a5c371c290451251feedf20d4c2fe0b7->leave($__internal_09b753bb15b57ada21247f83eeebcc47a5c371c290451251feedf20d4c2fe0b7_prof);

    }

    // line 389
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_dd65ad786fbc23bd107e4556c0a0dde2c4a478d70a0e598f489f3f791f4b3c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd65ad786fbc23bd107e4556c0a0dde2c4a478d70a0e598f489f3f791f4b3c7c->enter($__internal_dd65ad786fbc23bd107e4556c0a0dde2c4a478d70a0e598f489f3f791f4b3c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 391
            echo " ";
            // line 392
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 393
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            } elseif ((            // line 394
$context["attrvalue"] === true)) {
                // line 395
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 396
$context["attrvalue"] === false)) {
                // line 397
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dd65ad786fbc23bd107e4556c0a0dde2c4a478d70a0e598f489f3f791f4b3c7c->leave($__internal_dd65ad786fbc23bd107e4556c0a0dde2c4a478d70a0e598f489f3f791f4b3c7c_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1297 => 397,  1295 => 396,  1290 => 395,  1288 => 394,  1283 => 393,  1281 => 392,  1279 => 391,  1275 => 390,  1269 => 389,  1254 => 384,  1252 => 383,  1247 => 382,  1245 => 381,  1240 => 380,  1238 => 379,  1236 => 378,  1232 => 377,  1223 => 376,  1217 => 375,  1202 => 370,  1200 => 369,  1195 => 368,  1193 => 367,  1188 => 366,  1186 => 365,  1184 => 364,  1180 => 363,  1174 => 362,  1168 => 361,  1153 => 356,  1151 => 355,  1146 => 354,  1144 => 353,  1139 => 352,  1137 => 351,  1135 => 350,  1131 => 349,  1127 => 348,  1123 => 347,  1119 => 346,  1113 => 345,  1107 => 344,  1096 => 340,  1092 => 339,  1086 => 338,  1074 => 331,  1072 => 330,  1068 => 329,  1062 => 328,  1054 => 324,  1046 => 322,  1042 => 321,  1040 => 320,  1038 => 319,  1032 => 318,  1023 => 315,  1017 => 314,  1010 => 311,  1007 => 309,  1005 => 308,  999 => 307,  989 => 303,  987 => 302,  963 => 301,  960 => 299,  957 => 297,  955 => 296,  953 => 295,  947 => 294,  940 => 291,  938 => 290,  936 => 289,  930 => 288,  923 => 283,  917 => 282,  910 => 279,  908 => 278,  906 => 277,  900 => 276,  893 => 273,  891 => 272,  889 => 271,  887 => 270,  885 => 269,  879 => 268,  872 => 265,  866 => 260,  855 => 256,  841 => 251,  838 => 250,  836 => 249,  818 => 248,  814 => 245,  811 => 242,  810 => 241,  809 => 240,  807 => 239,  804 => 238,  801 => 236,  798 => 235,  795 => 233,  793 => 232,  791 => 231,  785 => 230,  778 => 225,  776 => 224,  770 => 223,  763 => 220,  761 => 219,  755 => 218,  742 => 215,  738 => 212,  735 => 209,  734 => 208,  733 => 207,  731 => 206,  729 => 205,  723 => 204,  716 => 201,  714 => 200,  708 => 199,  701 => 196,  699 => 195,  693 => 194,  686 => 191,  684 => 190,  678 => 189,  670 => 186,  668 => 185,  662 => 184,  655 => 181,  653 => 180,  647 => 179,  640 => 176,  638 => 175,  632 => 174,  625 => 171,  619 => 170,  612 => 167,  610 => 166,  604 => 165,  597 => 162,  595 => 161,  589 => 159,  581 => 155,  571 => 154,  566 => 153,  564 => 152,  561 => 150,  559 => 149,  553 => 148,  545 => 144,  543 => 142,  542 => 141,  541 => 140,  540 => 139,  536 => 138,  533 => 136,  531 => 135,  525 => 134,  517 => 130,  515 => 129,  513 => 128,  511 => 127,  509 => 126,  505 => 125,  502 => 123,  500 => 122,  494 => 121,  476 => 118,  470 => 117,  442 => 114,  440 => 113,  434 => 112,  405 => 107,  403 => 106,  400 => 104,  398 => 103,  396 => 102,  391 => 101,  389 => 100,  372 => 99,  366 => 98,  359 => 95,  357 => 94,  355 => 93,  349 => 90,  347 => 89,  345 => 88,  343 => 87,  341 => 86,  332 => 84,  330 => 83,  323 => 82,  320 => 80,  318 => 79,  312 => 78,  305 => 75,  299 => 73,  297 => 72,  293 => 71,  289 => 70,  283 => 69,  275 => 65,  272 => 63,  270 => 62,  264 => 61,  253 => 58,  247 => 57,  240 => 54,  237 => 52,  235 => 51,  229 => 50,  222 => 47,  220 => 46,  218 => 45,  215 => 43,  213 => 42,  209 => 41,  203 => 40,  186 => 37,  184 => 36,  178 => 35,  170 => 31,  167 => 29,  165 => 28,  159 => 27,  152 => 389,  150 => 375,  148 => 361,  146 => 344,  144 => 338,  141 => 335,  139 => 328,  137 => 318,  135 => 314,  133 => 307,  131 => 294,  129 => 288,  127 => 282,  125 => 276,  123 => 268,  121 => 260,  119 => 256,  117 => 230,  115 => 223,  113 => 218,  111 => 204,  109 => 199,  107 => 194,  105 => 189,  103 => 184,  101 => 179,  99 => 174,  97 => 170,  95 => 165,  93 => 159,  91 => 148,  89 => 134,  87 => 121,  85 => 117,  83 => 112,  81 => 98,  79 => 78,  77 => 69,  75 => 61,  73 => 57,  71 => 50,  69 => 40,  67 => 35,  65 => 27,);
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
{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
        {%- for child in form %}
            {{- form_widget(child) -}}
            {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
        {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} data-toggle=\"select2\">
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            {% set attr = choice.attr %}
            <option value=\"{{ choice.value }}\" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    {% set switch = switch|default('') -%}
    <input type=\"checkbox\" {% if switch %}data-toggle=\"switch\"{% endif %} {% if switch %}class=\"{{ switch }}\"{% endif %} {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{% endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
            '%name%': name,
            '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif %}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif %}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label|raw : label|raw }}</label>
        {% if label_attr['tooltip'] is defined %}
            {% set placement = label_attr['tooltip_placement'] is defined ? label_attr['tooltip_placement'] : 'top' %}
            <i class=\"icon-question\" data-toggle=\"tooltip\" data-placement=\"{{ placement }}\" title=\"{{ label_attr['tooltip'] }}\"></i>
        {% endif %}
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
    {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
    {% set form_method = method %}
{%- else -%}
    {% set form_method = \"POST\" %}
{%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
    <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
{%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
    {{ form_rest(form) }}
{%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        <ul>
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if read_only and attr.readonly is not defined %} readonly=\"readonly\"{% endif -%}
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
";
    }
}
