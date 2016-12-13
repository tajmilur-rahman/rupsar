<?php

/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_a5f862fc29bc1ccf535f50407158ab2426bbd0816204d601f56ff78594c471ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 26);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
            'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dade440088cfb97dd4eb1c1f2a8ea3b4b07d37bb761bbe9deb106e472a9a7d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dade440088cfb97dd4eb1c1f2a8ea3b4b07d37bb761bbe9deb106e472a9a7d8->enter($__internal_0dade440088cfb97dd4eb1c1f2a8ea3b4b07d37bb761bbe9deb106e472a9a7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        // line 25
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), array(0 => $this));
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dade440088cfb97dd4eb1c1f2a8ea3b4b07d37bb761bbe9deb106e472a9a7d8->leave($__internal_0dade440088cfb97dd4eb1c1f2a8ea3b4b07d37bb761bbe9deb106e472a9a7d8_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5dd8dd6f4f37d20c0016fdec42e6caec2037c058268d35f65912fb0d6798be79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd8dd6f4f37d20c0016fdec42e6caec2037c058268d35f65912fb0d6798be79->enter($__internal_5dd8dd6f4f37d20c0016fdec42e6caec2037c058268d35f65912fb0d6798be79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5dd8dd6f4f37d20c0016fdec42e6caec2037c058268d35f65912fb0d6798be79->leave($__internal_5dd8dd6f4f37d20c0016fdec42e6caec2037c058268d35f65912fb0d6798be79_prof);

    }

    // line 36
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_47560775829137f49a1dc9d878ad5b8e00714fcf1d7f76279fb71be213760cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47560775829137f49a1dc9d878ad5b8e00714fcf1d7f76279fb71be213760cbc->enter($__internal_47560775829137f49a1dc9d878ad5b8e00714fcf1d7f76279fb71be213760cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 37
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <ul class=\"category-tree\">";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 40
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</ul>
    </div>";
        
        $__internal_47560775829137f49a1dc9d878ad5b8e00714fcf1d7f76279fb71be213760cbc->leave($__internal_47560775829137f49a1dc9d878ad5b8e00714fcf1d7f76279fb71be213760cbc_prof);

    }

    // line 46
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_b67e930033562e395b4d8d8d16188bdd57ea0c4cc2f9806c489c34f26b36ff43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67e930033562e395b4d8d8d16188bdd57ea0c4cc2f9806c489c34f26b36ff43->enter($__internal_b67e930033562e395b4d8d8d16188bdd57ea0c4cc2f9806c489c34f26b36ff43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 47
        echo "<li>
        ";
        // line 48
        $context["checked"] = ((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute((isset($context["submitted_values"]) ? $context["submitted_values"] : null), $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 49
        echo "
         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "name", array()), "html", null, true);
        echo "
                 <input
                   type=\"radio\"
                   name=\"form[";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\"
                   value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "id_category", array()), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked")), "html", null, true);
        echo "
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        ";
        // line 61
        if ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "children", array(), "any", true, true)) {
            // line 62
            echo "            <ul>
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                echo "                    ";
                $context["child"] = $context["item"];
                // line 65
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "</ul>
        ";
        }
        // line 69
        echo "    </li>";
        
        $__internal_b67e930033562e395b4d8d8d16188bdd57ea0c4cc2f9806c489c34f26b36ff43->leave($__internal_b67e930033562e395b4d8d8d16188bdd57ea0c4cc2f9806c489c34f26b36ff43_prof);

    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d19754995bbaaf059a54885433f307c3963ebd7beaf72f501973487da997ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d19754995bbaaf059a54885433f307c3963ebd7beaf72f501973487da997ce3->enter($__internal_1d19754995bbaaf059a54885433f307c3963ebd7beaf72f501973487da997ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 73
        echo "
  <div class=\"products-catalog\">

    ";
        // line 76
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", array("kpi_controller" => "AdminProductsController"));
        echo "

    <div class=\"content container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_export_action");
        echo "\">
              ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export", array(), "Admin.Actions"), 1 => "cloud_upload"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["import_link"]) ? $context["import_link"] : $this->getContext($context, "import_link")), "html", null, true);
        echo "\">
              ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", array(), "Admin.Actions"), 1 => "cloud_download"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show SQL query", array(), "Admin.Actions"), 1 => "code"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ps"]) ? $context["ps"] : $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), 1 => "storage"), "method"), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              ";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", array(), "Admin.Actions"), "html", null, true);
        echo "
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_bulk_action", array("action" => "activate_all"));
        echo "\"
          massediturl=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_mass_edit_action", array("action" => "sort"));
        echo "\"
          redirecturl=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "sortOrder" => (isset($context["sortOrder"]) ? $context["sortOrder"] : $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
          redirecturlnextpage=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "offset" => ((isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")) + (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit"))), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "sortOrder" => (isset($context["sortOrder"]) ? $context["sortOrder"] : $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
        >
          ";
        // line 119
        $context["buttons_action"] = array(0 => array("onclick" => "bulkProductAction(this, 'activate_all');", "icon" => "radio_button_checked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate selection", array(), "Admin.Actions")), 1 => array("onclick" => "bulkProductAction(this, 'deactivate_all');", "icon" => "radio_button_unchecked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivate selection", array(), "Admin.Actions")));
        // line 131
        echo "
          ";
        // line 133
        echo "          ";
        if ((isset($context["is_shop_context"]) ? $context["is_shop_context"] : $this->getContext($context, "is_shop_context"))) {
            // line 134
            echo "            ";
            $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) ? $context["buttons_action"] : $this->getContext($context, "buttons_action")), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'duplicate_all');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate selection", array(), "Admin.Actions"))));
            // line 144
            echo "          ";
        }
        // line 145
        echo "
          ";
        // line 146
        $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) ? $context["buttons_action"] : $this->getContext($context, "buttons_action")), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'delete_all');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete selection", array(), "Admin.Actions"))));
        // line 156
        echo "
          ";
        // line 157
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 157)->display(array_merge($context, array("div_style" => "btn-group dropup", "button_id" => "product_bulk_menu", "disabled" => true, "menu_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk actions", array(), "Admin.Global"), "buttonType" => "tertiary-outline", "menu_icon" => "icon-caret-up", "items" =>         // line 164
(isset($context["buttons_action"]) ? $context["buttons_action"] : $this->getContext($context, "buttons_action")))));
        // line 166
        echo "        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          ";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter by categories", array(), "Admin.Actions"), "html", null, true);
        echo "
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              ";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              ";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              ";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unselect", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <hr>
            ";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 'widget');
        echo "
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "sortOrder" => (isset($context["sortOrder"]) ? $context["sortOrder"] : $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
        orderingurl=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "orderBy" => "name", "sortOrder" => "desc")), "html", null, true);
        echo "\"
        newproducturl=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 223
        echo twig_escape_filter($this->env, ((array_key_exists("filter_category", $context)) ? (_twig_default_filter((isset($context["filter_category"]) ? $context["filter_category"] : $this->getContext($context, "filter_category")), "")) : ("")), "html", null, true);
        echo "\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" =>         // line 232
(isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "offset" =>         // line 233
(isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")), "orderBy" =>         // line 234
(isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "sortOrder" =>         // line 235
(isset($context["sortOrder"]) ? $context["sortOrder"] : $this->getContext($context, "sortOrder")))), "html", null, true);
        // line 236
        echo "\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    ";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 242
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 242)->display(array_merge($context, array("column" => "id_product")));
        // line 245
        echo "                  </th>
                  <th>
                    ";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image", array(), "Admin.Global"), "html", null, true);
        echo "
                  </th>
                  <th>
                    ";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 251
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 251)->display(array_merge($context, array("column" => "name")));
        // line 254
        echo "                  </th>
                  <th style=\"width: 9%\">
                    ";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 257
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 257)->display(array_merge($context, array("column" => "reference")));
        // line 260
        echo "                  </th>
                  <th>
                    ";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 263
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 263)->display(array_merge($context, array("column" => "name_category")));
        // line 266
        echo "                  </th>
                  <th style=\"width: 9%\">
                    ";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 269
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 269)->display(array_merge($context, array("column" => "price")));
        // line 272
        echo "                  </th>

                  ";
        // line 274
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 275
            echo "                  <th style=\"width: 9%\">
                    ";
            // line 276
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                    ";
            // line 277
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 277)->display(array_merge($context, array("column" => "sav_quantity")));
            // line 280
            echo "                  </th>
                  ";
        } else {
            // line 282
            echo "                    <th></th>
                  ";
        }
        // line 284
        echo "
                  <th>
                    ";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 287
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 287)->display(array_merge($context, array("column" => "active")));
        // line 290
        echo "                  </th>
                  ";
        // line 291
        if (((isset($context["has_category_filter"]) ? $context["has_category_filter"] : $this->getContext($context, "has_category_filter")) == true)) {
            // line 292
            echo "                    <th>
                      ";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", array(), "Admin.Global"), "html", null, true);
            echo "
                      ";
            // line 294
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 294)->display(array_merge($context, array("column" => "position")));
            // line 297
            echo "                    </th>
                  ";
        }
        // line 299
        echo "                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    ";
        // line 303
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 303)->display(array_merge($context, array("input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 309
(isset($context["filter_column_id_product"]) ? $context["filter_column_id_product"] : $this->getContext($context, "filter_column_id_product")))));
        // line 311
        echo "                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name\"
                      value=\"";
        // line 319
        echo twig_escape_filter($this->env, (isset($context["filter_column_name"]) ? $context["filter_column_name"] : $this->getContext($context, "filter_column_name")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search ref.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_reference\"
                      value=\"";
        // line 328
        echo twig_escape_filter($this->env, (isset($context["filter_column_reference"]) ? $context["filter_column_reference"] : $this->getContext($context, "filter_column_reference")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search category", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name_category\"
                      value=\"";
        // line 337
        echo twig_escape_filter($this->env, (isset($context["filter_column_name_category"]) ? $context["filter_column_name_category"] : $this->getContext($context, "filter_column_name_category")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    ";
        // line 341
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 341)->display(array_merge($context, array("input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 347
(isset($context["filter_column_price"]) ? $context["filter_column_price"] : $this->getContext($context, "filter_column_price")))));
        // line 349
        echo "                  </th>

                  ";
        // line 351
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 352
            echo "                  <th>
                    ";
            // line 353
            $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 353)->display(array_merge($context, array("input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>             // line 359
(isset($context["filter_column_sav_quantity"]) ? $context["filter_column_sav_quantity"] : $this->getContext($context, "filter_column_sav_quantity")))));
            // line 361
            echo "                  </th>
                  ";
        } else {
            // line 363
            echo "                    <th></th>
                  ";
        }
        // line 365
        echo "
                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" ";
        // line 369
        if ((array_key_exists("filter_column_active", $context) && ((isset($context["filter_column_active"]) ? $context["filter_column_active"] : $this->getContext($context, "filter_column_active")) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                      <option value=\"0\" ";
        // line 370
        if ((array_key_exists("filter_column_active", $context) && ((isset($context["filter_column_active"]) ? $context["filter_column_active"] : $this->getContext($context, "filter_column_active")) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
                    </select>
                  </th>
                  ";
        // line 373
        if (((isset($context["has_category_filter"]) ? $context["has_category_filter"] : $this->getContext($context, "has_category_filter")) == true)) {
            // line 374
            echo "                    <th>
                      ";
            // line 375
            if ( !(isset($context["activate_drag_and_drop"]) ? $context["activate_drag_and_drop"] : $this->getContext($context, "activate_drag_and_drop"))) {
                // line 376
                echo "                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reorder", array(), "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                        ";
            } else {
                // line 378
                echo "                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save & refresh", array(), "Admin.Actions");
                echo "\" />
                    ";
            }
            // line 380
            echo "
                    </th>
                  ";
        }
        // line 383
        echo "                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">search</i>
                      ";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">clear</i>
                      ";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                  </th>
                </tr>
              </thead>
              ";
        // line 406
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", array("limit" =>         // line 407
(isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "offset" =>         // line 408
(isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")), "orderBy" =>         // line 409
(isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "sortOrder" =>         // line 410
(isset($context["sortOrder"]) ? $context["sortOrder"] : $this->getContext($context, "sortOrder")), "products" =>         // line 411
(isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")), "last_sql" =>         // line 412
(isset($context["last_sql"]) ? $context["last_sql"] : $this->getContext($context, "last_sql")))));
        // line 413
        echo "
            </table>
          </div>
        </div>

        ";
        // line 418
        if (((isset($context["product_count_filtered"]) ? $context["product_count_filtered"] : $this->getContext($context, "product_count_filtered")) > 20)) {
            // line 419
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 421
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" =>             // line 422
(isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "offset" => (isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")), "total" => (isset($context["product_count_filtered"]) ? $context["product_count_filtered"] : $this->getContext($context, "product_count_filtered")), "caller_parameters" => (isset($context["pagination_parameters"]) ? $context["pagination_parameters"] : $this->getContext($context, "pagination_parameters")), "limit_choices" => (isset($context["pagination_limit_choices"]) ? $context["pagination_limit_choices"] : $this->getContext($context, "pagination_limit_choices")))));
            // line 423
            echo "
            </div>
          </div>
        ";
        }
        // line 427
        echo "
      </form>

    </div>
  </div>

  ";
        // line 434
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 434, "1321114314")->display(array_merge($context, array("id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 453
        echo "

  ";
        // line 456
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 456, "372972662")->display(array_merge($context, array("id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 475
        echo "

  ";
        // line 478
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 478, "1908107845")->display(array_merge($context, array("id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 497
        echo "

  ";
        // line 500
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 500, "416856869")->display(array_merge($context, array("id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 519
        echo "

  ";
        // line 522
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 522, "1855925394")->display(array_merge($context, array("id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", array(), "Admin.Catalog.Feature"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", array(), "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg")))));
        // line 539
        echo "
  ";
        // line 540
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 540, "475756826")->display(array_merge($context, array("id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", array(), "Admin.Global"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg")))));
        // line 560
        echo "
";
        
        $__internal_1d19754995bbaaf059a54885433f307c3963ebd7beaf72f501973487da997ce3->leave($__internal_1d19754995bbaaf059a54885433f307c3963ebd7beaf72f501973487da997ce3_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  778 => 560,  776 => 540,  773 => 539,  770 => 522,  766 => 519,  763 => 500,  759 => 497,  756 => 478,  752 => 475,  749 => 456,  745 => 453,  742 => 434,  734 => 427,  728 => 423,  726 => 422,  725 => 421,  721 => 419,  719 => 418,  712 => 413,  710 => 412,  709 => 411,  708 => 410,  707 => 409,  706 => 408,  705 => 407,  704 => 406,  696 => 401,  690 => 398,  680 => 391,  674 => 388,  667 => 383,  662 => 380,  656 => 378,  650 => 376,  648 => 375,  645 => 374,  643 => 373,  635 => 370,  629 => 369,  623 => 365,  619 => 363,  615 => 361,  613 => 359,  612 => 353,  609 => 352,  607 => 351,  603 => 349,  601 => 347,  600 => 341,  593 => 337,  588 => 335,  578 => 328,  573 => 326,  563 => 319,  558 => 317,  550 => 311,  548 => 309,  547 => 303,  541 => 299,  537 => 297,  535 => 294,  531 => 293,  528 => 292,  526 => 291,  523 => 290,  521 => 287,  517 => 286,  513 => 284,  509 => 282,  505 => 280,  503 => 277,  499 => 276,  496 => 275,  494 => 274,  490 => 272,  488 => 269,  484 => 268,  480 => 266,  478 => 263,  474 => 262,  470 => 260,  468 => 257,  464 => 256,  460 => 254,  458 => 251,  454 => 250,  448 => 247,  444 => 245,  442 => 242,  438 => 241,  431 => 236,  429 => 235,  428 => 234,  427 => 233,  426 => 232,  425 => 231,  414 => 223,  407 => 219,  403 => 218,  399 => 217,  387 => 208,  381 => 205,  368 => 195,  355 => 185,  340 => 173,  331 => 166,  329 => 164,  328 => 157,  325 => 156,  323 => 146,  320 => 145,  317 => 144,  314 => 134,  311 => 133,  308 => 131,  306 => 119,  301 => 117,  297 => 116,  293 => 115,  289 => 114,  279 => 107,  261 => 92,  255 => 89,  249 => 86,  245 => 85,  240 => 83,  236 => 82,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_a5f862fc29bc1ccf535f50407158ab2426bbd0816204d601f56ff78594c471ae_1321114314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 434
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 434);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a79314bbc6f0a85c9b75f624565860bc3891ecb585d9b7d74ea83e1bba517559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79314bbc6f0a85c9b75f624565860bc3891ecb585d9b7d74ea83e1bba517559->enter($__internal_a79314bbc6f0a85c9b75f624565860bc3891ecb585d9b7d74ea83e1bba517559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a79314bbc6f0a85c9b75f624565860bc3891ecb585d9b7d74ea83e1bba517559->leave($__internal_a79314bbc6f0a85c9b75f624565860bc3891ecb585d9b7d74ea83e1bba517559_prof);

    }

    // line 444
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c0b8ad38d1e5ab5e83eab0d9dfc1b3126c481a1e899723a7c230e307a48b1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0b8ad38d1e5ab5e83eab0d9dfc1b3126c481a1e899723a7c230e307a48b1ce->enter($__internal_5c0b8ad38d1e5ab5e83eab0d9dfc1b3126c481a1e899723a7c230e307a48b1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 445
        echo "      <div class=\"modal-body\">
        ";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_5c0b8ad38d1e5ab5e83eab0d9dfc1b3126c481a1e899723a7c230e307a48b1ce->leave($__internal_5c0b8ad38d1e5ab5e83eab0d9dfc1b3126c481a1e899723a7c230e307a48b1ce_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1413 => 448,  1408 => 446,  1405 => 445,  1399 => 444,  1376 => 434,  778 => 560,  776 => 540,  773 => 539,  770 => 522,  766 => 519,  763 => 500,  759 => 497,  756 => 478,  752 => 475,  749 => 456,  745 => 453,  742 => 434,  734 => 427,  728 => 423,  726 => 422,  725 => 421,  721 => 419,  719 => 418,  712 => 413,  710 => 412,  709 => 411,  708 => 410,  707 => 409,  706 => 408,  705 => 407,  704 => 406,  696 => 401,  690 => 398,  680 => 391,  674 => 388,  667 => 383,  662 => 380,  656 => 378,  650 => 376,  648 => 375,  645 => 374,  643 => 373,  635 => 370,  629 => 369,  623 => 365,  619 => 363,  615 => 361,  613 => 359,  612 => 353,  609 => 352,  607 => 351,  603 => 349,  601 => 347,  600 => 341,  593 => 337,  588 => 335,  578 => 328,  573 => 326,  563 => 319,  558 => 317,  550 => 311,  548 => 309,  547 => 303,  541 => 299,  537 => 297,  535 => 294,  531 => 293,  528 => 292,  526 => 291,  523 => 290,  521 => 287,  517 => 286,  513 => 284,  509 => 282,  505 => 280,  503 => 277,  499 => 276,  496 => 275,  494 => 274,  490 => 272,  488 => 269,  484 => 268,  480 => 266,  478 => 263,  474 => 262,  470 => 260,  468 => 257,  464 => 256,  460 => 254,  458 => 251,  454 => 250,  448 => 247,  444 => 245,  442 => 242,  438 => 241,  431 => 236,  429 => 235,  428 => 234,  427 => 233,  426 => 232,  425 => 231,  414 => 223,  407 => 219,  403 => 218,  399 => 217,  387 => 208,  381 => 205,  368 => 195,  355 => 185,  340 => 173,  331 => 166,  329 => 164,  328 => 157,  325 => 156,  323 => 146,  320 => 145,  317 => 144,  314 => 134,  311 => 133,  308 => 131,  306 => 119,  301 => 117,  297 => 116,  293 => 115,  289 => 114,  279 => 107,  261 => 92,  255 => 89,  249 => 86,  245 => 85,  240 => 83,  236 => 82,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_a5f862fc29bc1ccf535f50407158ab2426bbd0816204d601f56ff78594c471ae_372972662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 456
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 456);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd32b026e8f40f1087b3e055ca6ff537bbfd7534e38d67ff71b7177f24409a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd32b026e8f40f1087b3e055ca6ff537bbfd7534e38d67ff71b7177f24409a38->enter($__internal_cd32b026e8f40f1087b3e055ca6ff537bbfd7534e38d67ff71b7177f24409a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd32b026e8f40f1087b3e055ca6ff537bbfd7534e38d67ff71b7177f24409a38->leave($__internal_cd32b026e8f40f1087b3e055ca6ff537bbfd7534e38d67ff71b7177f24409a38_prof);

    }

    // line 466
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a06ae0a57f9a85019ed5c0efb3038242e77145818ffbfc3da7aede07a71ca2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a06ae0a57f9a85019ed5c0efb3038242e77145818ffbfc3da7aede07a71ca2f->enter($__internal_6a06ae0a57f9a85019ed5c0efb3038242e77145818ffbfc3da7aede07a71ca2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 467
        echo "      <div class=\"modal-body\">
        ";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_6a06ae0a57f9a85019ed5c0efb3038242e77145818ffbfc3da7aede07a71ca2f->leave($__internal_6a06ae0a57f9a85019ed5c0efb3038242e77145818ffbfc3da7aede07a71ca2f_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2051 => 470,  2046 => 468,  2043 => 467,  2037 => 466,  2014 => 456,  1413 => 448,  1408 => 446,  1405 => 445,  1399 => 444,  1376 => 434,  778 => 560,  776 => 540,  773 => 539,  770 => 522,  766 => 519,  763 => 500,  759 => 497,  756 => 478,  752 => 475,  749 => 456,  745 => 453,  742 => 434,  734 => 427,  728 => 423,  726 => 422,  725 => 421,  721 => 419,  719 => 418,  712 => 413,  710 => 412,  709 => 411,  708 => 410,  707 => 409,  706 => 408,  705 => 407,  704 => 406,  696 => 401,  690 => 398,  680 => 391,  674 => 388,  667 => 383,  662 => 380,  656 => 378,  650 => 376,  648 => 375,  645 => 374,  643 => 373,  635 => 370,  629 => 369,  623 => 365,  619 => 363,  615 => 361,  613 => 359,  612 => 353,  609 => 352,  607 => 351,  603 => 349,  601 => 347,  600 => 341,  593 => 337,  588 => 335,  578 => 328,  573 => 326,  563 => 319,  558 => 317,  550 => 311,  548 => 309,  547 => 303,  541 => 299,  537 => 297,  535 => 294,  531 => 293,  528 => 292,  526 => 291,  523 => 290,  521 => 287,  517 => 286,  513 => 284,  509 => 282,  505 => 280,  503 => 277,  499 => 276,  496 => 275,  494 => 274,  490 => 272,  488 => 269,  484 => 268,  480 => 266,  478 => 263,  474 => 262,  470 => 260,  468 => 257,  464 => 256,  460 => 254,  458 => 251,  454 => 250,  448 => 247,  444 => 245,  442 => 242,  438 => 241,  431 => 236,  429 => 235,  428 => 234,  427 => 233,  426 => 232,  425 => 231,  414 => 223,  407 => 219,  403 => 218,  399 => 217,  387 => 208,  381 => 205,  368 => 195,  355 => 185,  340 => 173,  331 => 166,  329 => 164,  328 => 157,  325 => 156,  323 => 146,  320 => 145,  317 => 144,  314 => 134,  311 => 133,  308 => 131,  306 => 119,  301 => 117,  297 => 116,  293 => 115,  289 => 114,  279 => 107,  261 => 92,  255 => 89,  249 => 86,  245 => 85,  240 => 83,  236 => 82,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_a5f862fc29bc1ccf535f50407158ab2426bbd0816204d601f56ff78594c471ae_1908107845 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 478
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 478);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3feb9d13c729caaceca5280e655bb15b243d83c08a7391e37635384b5f3faf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3feb9d13c729caaceca5280e655bb15b243d83c08a7391e37635384b5f3faf3b->enter($__internal_3feb9d13c729caaceca5280e655bb15b243d83c08a7391e37635384b5f3faf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3feb9d13c729caaceca5280e655bb15b243d83c08a7391e37635384b5f3faf3b->leave($__internal_3feb9d13c729caaceca5280e655bb15b243d83c08a7391e37635384b5f3faf3b_prof);

    }

    // line 488
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd0eb05750fc19f630aaba4dabce4e636a7062c0b88c34aa2d3132575960ea01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0eb05750fc19f630aaba4dabce4e636a7062c0b88c34aa2d3132575960ea01->enter($__internal_bd0eb05750fc19f630aaba4dabce4e636a7062c0b88c34aa2d3132575960ea01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 489
        echo "      <div class=\"modal-body\">
        ";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_bd0eb05750fc19f630aaba4dabce4e636a7062c0b88c34aa2d3132575960ea01->leave($__internal_bd0eb05750fc19f630aaba4dabce4e636a7062c0b88c34aa2d3132575960ea01_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2689 => 492,  2684 => 490,  2681 => 489,  2675 => 488,  2652 => 478,  2051 => 470,  2046 => 468,  2043 => 467,  2037 => 466,  2014 => 456,  1413 => 448,  1408 => 446,  1405 => 445,  1399 => 444,  1376 => 434,  778 => 560,  776 => 540,  773 => 539,  770 => 522,  766 => 519,  763 => 500,  759 => 497,  756 => 478,  752 => 475,  749 => 456,  745 => 453,  742 => 434,  734 => 427,  728 => 423,  726 => 422,  725 => 421,  721 => 419,  719 => 418,  712 => 413,  710 => 412,  709 => 411,  708 => 410,  707 => 409,  706 => 408,  705 => 407,  704 => 406,  696 => 401,  690 => 398,  680 => 391,  674 => 388,  667 => 383,  662 => 380,  656 => 378,  650 => 376,  648 => 375,  645 => 374,  643 => 373,  635 => 370,  629 => 369,  623 => 365,  619 => 363,  615 => 361,  613 => 359,  612 => 353,  609 => 352,  607 => 351,  603 => 349,  601 => 347,  600 => 341,  593 => 337,  588 => 335,  578 => 328,  573 => 326,  563 => 319,  558 => 317,  550 => 311,  548 => 309,  547 => 303,  541 => 299,  537 => 297,  535 => 294,  531 => 293,  528 => 292,  526 => 291,  523 => 290,  521 => 287,  517 => 286,  513 => 284,  509 => 282,  505 => 280,  503 => 277,  499 => 276,  496 => 275,  494 => 274,  490 => 272,  488 => 269,  484 => 268,  480 => 266,  478 => 263,  474 => 262,  470 => 260,  468 => 257,  464 => 256,  460 => 254,  458 => 251,  454 => 250,  448 => 247,  444 => 245,  442 => 242,  438 => 241,  431 => 236,  429 => 235,  428 => 234,  427 => 233,  426 => 232,  425 => 231,  414 => 223,  407 => 219,  403 => 218,  399 => 217,  387 => 208,  381 => 205,  368 => 195,  355 => 185,  340 => 173,  331 => 166,  329 => 164,  328 => 157,  325 => 156,  323 => 146,  320 => 145,  317 => 144,  314 => 134,  311 => 133,  308 => 131,  306 => 119,  301 => 117,  297 => 116,  293 => 115,  289 => 114,  279 => 107,  261 => 92,  255 => 89,  249 => 86,  245 => 85,  240 => 83,  236 => 82,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_a5f862fc29bc1ccf535f50407158ab2426bbd0816204d601f56ff78594c471ae_416856869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 500
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 500);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43d6725e9843353b541fc94596a1fdc544f592294e899e2f63d47bd6bad658c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d6725e9843353b541fc94596a1fdc544f592294e899e2f63d47bd6bad658c6->enter($__internal_43d6725e9843353b541fc94596a1fdc544f592294e899e2f63d47bd6bad658c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43d6725e9843353b541fc94596a1fdc544f592294e899e2f63d47bd6bad658c6->leave($__internal_43d6725e9843353b541fc94596a1fdc544f592294e899e2f63d47bd6bad658c6_prof);

    }

    // line 510
    public function block_content($context, array $blocks = array())
    {
        $__internal_442143f5dab51db1cbabd8dfa62cb07cfb1e271ee68cbef5e7dd94386265349a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442143f5dab51db1cbabd8dfa62cb07cfb1e271ee68cbef5e7dd94386265349a->enter($__internal_442143f5dab51db1cbabd8dfa62cb07cfb1e271ee68cbef5e7dd94386265349a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 511
        echo "      <div class=\"modal-body\">
        ";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_442143f5dab51db1cbabd8dfa62cb07cfb1e271ee68cbef5e7dd94386265349a->leave($__internal_442143f5dab51db1cbabd8dfa62cb07cfb1e271ee68cbef5e7dd94386265349a_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3327 => 514,  3322 => 512,  3319 => 511,  3313 => 510,  3290 => 500,  2689 => 492,  2684 => 490,  2681 => 489,  2675 => 488,  2652 => 478,  2051 => 470,  2046 => 468,  2043 => 467,  2037 => 466,  2014 => 456,  1413 => 448,  1408 => 446,  1405 => 445,  1399 => 444,  1376 => 434,  778 => 560,  776 => 540,  773 => 539,  770 => 522,  766 => 519,  763 => 500,  759 => 497,  756 => 478,  752 => 475,  749 => 456,  745 => 453,  742 => 434,  734 => 427,  728 => 423,  726 => 422,  725 => 421,  721 => 419,  719 => 418,  712 => 413,  710 => 412,  709 => 411,  708 => 410,  707 => 409,  706 => 408,  705 => 407,  704 => 406,  696 => 401,  690 => 398,  680 => 391,  674 => 388,  667 => 383,  662 => 380,  656 => 378,  650 => 376,  648 => 375,  645 => 374,  643 => 373,  635 => 370,  629 => 369,  623 => 365,  619 => 363,  615 => 361,  613 => 359,  612 => 353,  609 => 352,  607 => 351,  603 => 349,  601 => 347,  600 => 341,  593 => 337,  588 => 335,  578 => 328,  573 => 326,  563 => 319,  558 => 317,  550 => 311,  548 => 309,  547 => 303,  541 => 299,  537 => 297,  535 => 294,  531 => 293,  528 => 292,  526 => 291,  523 => 290,  521 => 287,  517 => 286,  513 => 284,  509 => 282,  505 => 280,  503 => 277,  499 => 276,  496 => 275,  494 => 274,  490 => 272,  488 => 269,  484 => 268,  480 => 266,  478 => 263,  474 => 262,  470 => 260,  468 => 257,  464 => 256,  460 => 254,  458 => 251,  454 => 250,  448 => 247,  444 => 245,  442 => 242,  438 => 241,  431 => 236,  429 => 235,  428 => 234,  427 => 233,  426 => 232,  425 => 231,  414 => 223,  407 => 219,  403 => 218,  399 => 217,  387 => 208,  381 => 205,  368 => 195,  355 => 185,  340 => 173,  331 => 166,  329 => 164,  328 => 157,  325 => 156,  323 => 146,  320 => 145,  317 => 144,  314 => 134,  311 => 133,  308 => 131,  306 => 119,  301 => 117,  297 => 116,  293 => 115,  289 => 114,  279 => 107,  261 => 92,  255 => 89,  249 => 86,  245 => 85,  240 => 83,  236 => 82,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_a5f862fc29bc1ccf535f50407158ab2426bbd0816204d601f56ff78594c471ae_1855925394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 522
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 522);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb2c05a13fcc23ff83a91e574f6b593ce31174f1b1f0bde595a66b6b0814928c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2c05a13fcc23ff83a91e574f6b593ce31174f1b1f0bde595a66b6b0814928c->enter($__internal_bb2c05a13fcc23ff83a91e574f6b593ce31174f1b1f0bde595a66b6b0814928c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb2c05a13fcc23ff83a91e574f6b593ce31174f1b1f0bde595a66b6b0814928c->leave($__internal_bb2c05a13fcc23ff83a91e574f6b593ce31174f1b1f0bde595a66b6b0814928c_prof);

    }

    // line 533
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ed7f2d75ef7ed4848cfff550d801c43a99a51f7a33895a4eb158f6b3f69d505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed7f2d75ef7ed4848cfff550d801c43a99a51f7a33895a4eb158f6b3f69d505->enter($__internal_2ed7f2d75ef7ed4848cfff550d801c43a99a51f7a33895a4eb158f6b3f69d505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 534
        echo "      <div class=\"modal-body\">
        ";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
        
        $__internal_2ed7f2d75ef7ed4848cfff550d801c43a99a51f7a33895a4eb158f6b3f69d505->leave($__internal_2ed7f2d75ef7ed4848cfff550d801c43a99a51f7a33895a4eb158f6b3f69d505_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3960 => 535,  3957 => 534,  3951 => 533,  3928 => 522,  3327 => 514,  3322 => 512,  3319 => 511,  3313 => 510,  3290 => 500,  2689 => 492,  2684 => 490,  2681 => 489,  2675 => 488,  2652 => 478,  2051 => 470,  2046 => 468,  2043 => 467,  2037 => 466,  2014 => 456,  1413 => 448,  1408 => 446,  1405 => 445,  1399 => 444,  1376 => 434,  778 => 560,  776 => 540,  773 => 539,  770 => 522,  766 => 519,  763 => 500,  759 => 497,  756 => 478,  752 => 475,  749 => 456,  745 => 453,  742 => 434,  734 => 427,  728 => 423,  726 => 422,  725 => 421,  721 => 419,  719 => 418,  712 => 413,  710 => 412,  709 => 411,  708 => 410,  707 => 409,  706 => 408,  705 => 407,  704 => 406,  696 => 401,  690 => 398,  680 => 391,  674 => 388,  667 => 383,  662 => 380,  656 => 378,  650 => 376,  648 => 375,  645 => 374,  643 => 373,  635 => 370,  629 => 369,  623 => 365,  619 => 363,  615 => 361,  613 => 359,  612 => 353,  609 => 352,  607 => 351,  603 => 349,  601 => 347,  600 => 341,  593 => 337,  588 => 335,  578 => 328,  573 => 326,  563 => 319,  558 => 317,  550 => 311,  548 => 309,  547 => 303,  541 => 299,  537 => 297,  535 => 294,  531 => 293,  528 => 292,  526 => 291,  523 => 290,  521 => 287,  517 => 286,  513 => 284,  509 => 282,  505 => 280,  503 => 277,  499 => 276,  496 => 275,  494 => 274,  490 => 272,  488 => 269,  484 => 268,  480 => 266,  478 => 263,  474 => 262,  470 => 260,  468 => 257,  464 => 256,  460 => 254,  458 => 251,  454 => 250,  448 => 247,  444 => 245,  442 => 242,  438 => 241,  431 => 236,  429 => 235,  428 => 234,  427 => 233,  426 => 232,  425 => 231,  414 => 223,  407 => 219,  403 => 218,  399 => 217,  387 => 208,  381 => 205,  368 => 195,  355 => 185,  340 => 173,  331 => 166,  329 => 164,  328 => 157,  325 => 156,  323 => 146,  320 => 145,  317 => 144,  314 => 134,  311 => 133,  308 => 131,  306 => 119,  301 => 117,  297 => 116,  293 => 115,  289 => 114,  279 => 107,  261 => 92,  255 => 89,  249 => 86,  245 => 85,  240 => 83,  236 => 82,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
";
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_a5f862fc29bc1ccf535f50407158ab2426bbd0816204d601f56ff78594c471ae_475756826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 540
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 540);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbb4971b0ef430731e1c5fb803175cf2828cd5b4181de98f7bc5b23576b6f7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb4971b0ef430731e1c5fb803175cf2828cd5b4181de98f7bc5b23576b6f7bb->enter($__internal_fbb4971b0ef430731e1c5fb803175cf2828cd5b4181de98f7bc5b23576b6f7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbb4971b0ef430731e1c5fb803175cf2828cd5b4181de98f7bc5b23576b6f7bb->leave($__internal_fbb4971b0ef430731e1c5fb803175cf2828cd5b4181de98f7bc5b23576b6f7bb_prof);

    }

    // line 551
    public function block_content($context, array $blocks = array())
    {
        $__internal_b976b7cce9146e731bd58464beeea7480f08ba905eb84e8e1b53b353235908de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b976b7cce9146e731bd58464beeea7480f08ba905eb84e8e1b53b353235908de->enter($__internal_b976b7cce9146e731bd58464beeea7480f08ba905eb84e8e1b53b353235908de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 552
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["sql_manager_add_link"]) ? $context["sql_manager_add_link"] : $this->getContext($context, "sql_manager_add_link")), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
        
        $__internal_b976b7cce9146e731bd58464beeea7480f08ba905eb84e8e1b53b353235908de->leave($__internal_b976b7cce9146e731bd58464beeea7480f08ba905eb84e8e1b53b353235908de_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4589 => 552,  4583 => 551,  4560 => 540,  3960 => 535,  3957 => 534,  3951 => 533,  3928 => 522,  3327 => 514,  3322 => 512,  3319 => 511,  3313 => 510,  3290 => 500,  2689 => 492,  2684 => 490,  2681 => 489,  2675 => 488,  2652 => 478,  2051 => 470,  2046 => 468,  2043 => 467,  2037 => 466,  2014 => 456,  1413 => 448,  1408 => 446,  1405 => 445,  1399 => 444,  1376 => 434,  778 => 560,  776 => 540,  773 => 539,  770 => 522,  766 => 519,  763 => 500,  759 => 497,  756 => 478,  752 => 475,  749 => 456,  745 => 453,  742 => 434,  734 => 427,  728 => 423,  726 => 422,  725 => 421,  721 => 419,  719 => 418,  712 => 413,  710 => 412,  709 => 411,  708 => 410,  707 => 409,  706 => 408,  705 => 407,  704 => 406,  696 => 401,  690 => 398,  680 => 391,  674 => 388,  667 => 383,  662 => 380,  656 => 378,  650 => 376,  648 => 375,  645 => 374,  643 => 373,  635 => 370,  629 => 369,  623 => 365,  619 => 363,  615 => 361,  613 => 359,  612 => 353,  609 => 352,  607 => 351,  603 => 349,  601 => 347,  600 => 341,  593 => 337,  588 => 335,  578 => 328,  573 => 326,  563 => 319,  558 => 317,  550 => 311,  548 => 309,  547 => 303,  541 => 299,  537 => 297,  535 => 294,  531 => 293,  528 => 292,  526 => 291,  523 => 290,  521 => 287,  517 => 286,  513 => 284,  509 => 282,  505 => 280,  503 => 277,  499 => 276,  496 => 275,  494 => 274,  490 => 272,  488 => 269,  484 => 268,  480 => 266,  478 => 263,  474 => 262,  470 => 260,  468 => 257,  464 => 256,  460 => 254,  458 => 251,  454 => 250,  448 => 247,  444 => 245,  442 => 242,  438 => 241,  431 => 236,  429 => 235,  428 => 234,  427 => 233,  426 => 232,  425 => 231,  414 => 223,  407 => 219,  403 => 218,  399 => 217,  387 => 208,  381 => 205,  368 => 195,  355 => 185,  340 => 173,  331 => 166,  329 => 164,  328 => 157,  325 => 156,  323 => 146,  320 => 145,  317 => 144,  314 => 134,  311 => 133,  308 => 131,  306 => 119,  301 => 117,  297 => 116,  293 => 115,  289 => 114,  279 => 107,  261 => 92,  255 => 89,  249 => 86,  245 => 85,  240 => 83,  236 => 82,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
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
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 />
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {# Only duplicate if shop or group is selected #}
          {% if is_shop_context %}
            {% set buttons_action = buttons_action|merge([
            {
            \"divider\": true
            },
            {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
            ]) %}
          {% endif %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'desc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
";
    }
}
