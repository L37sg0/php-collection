<?= $helper->getHeadPrintCode($entity_class_name) ?>

{% block templateActions %}
    <a type="button" class="btn btn-sm btn-outline-secondary" href="{{ path('<?= $route_name ?>_index') }}">back to list</a>
    <a type="button"
       class="btn btn-sm btn-outline-secondary"
       href="{{ path('<?= $route_name ?>_edit', {'<?= $entity_identifier ?>': <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>}) }}">edit</a>
{% endblock %}

{% block body %}

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <tbody>
    <?php foreach ($entity_fields as $field): ?>
                <tr>
                    <th scope="col"><?= ucfirst($field['fieldName']) ?></th>
                    <td scope="col">{{ <?= $helper->getEntityFieldPrintCode($entity_twig_var_singular, $field) ?> }}</td>
                </tr>
    <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    {{ include('<?= $templates_path ?>/_delete_form.html.twig') }}
{% endblock %}
