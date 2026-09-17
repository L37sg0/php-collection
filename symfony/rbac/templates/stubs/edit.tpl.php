<?= $helper->getHeadPrintCode('Edit '.$entity_class_name) ?>

{% block templateActions %}
    <a type="button" class="btn btn-sm btn-outline-secondary" href="{{ path('<?= $route_name ?>_index') }}">back to list</a>
{% endblock %}

{% block body %}

    {{ include('<?= $templates_path ?>/_form.html.twig', {'button_label': 'Update'}) }}

    {{ include('<?= $templates_path ?>/_delete_form.html.twig') }}
{% endblock %}
