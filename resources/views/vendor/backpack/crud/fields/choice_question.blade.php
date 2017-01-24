<!-- PAGE OR LINK field -->
<!-- Used in Backpack\MenuCRUD -->

<?php
    $field['allows_null'] = false;
    $question_model = $field['question_model'];
    $questions_options = $question_model::all();
?>


<div @include('crud::inc.field_wrapper_attributes') >
    <label>{!! $field['label'] !!}</label>
    <div class="clearfix"></div>

    <div class="col-sm-12">
        <select
            id="page_or_link_select"
            name="{{ $field['name'] or 'type' }}"
            @include('crud::inc.field_attributes')
            >

            @if (isset($field['allows_null']) && $field['allows_null']==true)
                <option value="">-</option>
            @endif

                @if (count($questions_options))
                    @foreach ($questions_options as $key => $value)
                        <option data-type="{{ $value->type->label }}" value="{{ $value->id }}"
                            @if (isset($field['value']) && $key==$field['value'])
                                 selected
                            @endif
                        >{{ $value->label }}</option>
                    @endforeach
                @endif
        </select>
    </div>
</div>




{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <script>
            jQuery(document).ready(function($) {

                var checkboxField = $("form .form-group.col-md-12:first-child");
                checkboxField.attr('disabled');
                checkboxField.addClass('hidden');

                var optionSelected = $("option:selected", this);
                var type = optionSelected.attr('data-type');
                var valueSelected = this.value;

                switch(type) {

                    case 'Int':
                    case 'String':
                        checkboxField.attr('disabled', 'disabled');
                        checkboxField.addClass('hidden');
                        break;
                        
                    case 'Checkbox':
                        checkboxField.removeAttr('disabled');
                        checkboxField.removeClass('hidden');
                        break;

                    default: // page_link
                        checkboxField.attr('disabled');
                        checkboxField.addClass('hidden');
                }

                $("#page_or_link_select").change(function(e) {

                    var checkboxField = $("form .form-group.col-md-12:first-child");
                    checkboxField.attr('disabled');
                    checkboxField.addClass('hidden');

                    var optionSelected = $("option:selected", this);
                    var type = optionSelected.attr('data-type');
                    var valueSelected = this.value;

                    switch(type) {

                        case 'Int':
                        case 'String':
                            checkboxField.attr('disabled', 'disabled');
                            checkboxField.addClass('hidden');
                            break;

                        case 'Checkbox':
                            checkboxField.removeAttr('disabled');
                            checkboxField.removeClass('hidden');
                            break;

                        default: // page_link
                            checkboxField.attr('disabled');
                            checkboxField.addClass('hidden');
                    }
                });

            });
        </script>
    @endpush

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}