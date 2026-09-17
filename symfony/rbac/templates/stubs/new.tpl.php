<?= $helper->getHeadPrintCode('New '.$entity_class_name) ?>

{% block templateActions %}
    <a type="button" class="btn btn-sm btn-outline-secondary" href="{{ path('<?= $route_name ?>_index') }}">back to list</a>
{% endblock %}

{% block body %}

    {{ include('<?= $templates_path ?>/_form.html.twig') }}

{% endblock %}
