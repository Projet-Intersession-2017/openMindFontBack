<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\UserAnswerRequest as StoreRequest;
use App\Http\Requests\UserAnswerRequest as UpdateRequest;

class UserAnswerCrudController extends CrudController
{

    public function setUp()
    {

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\UserAnswer");
        $this->crud->setRoute("intra/useranswer");
        $this->crud->setEntityNameStrings('useranswer', 'user_answers');

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/

        $this->crud->setFromDb();



        $this->crud->addField([
            'label' => 'Questionnaire',
            'type' => 'select',
            'name' => 'survey_id', // the db column for the foreign key
            'entity' => 'survey', // the method that defines the relationship in your Model
            'attribute' => 'labelle', // foreign key attribute that is shown to user
            'model' => 'App\Models\Questionnaire', // foreign key model
            'attributes' => [
               
                    'readonly' => 'readonly',
                    'style'    =>  'pointer-events:none;'

             ], // extra HTML attributes and values your input might need
        ]);


        $this->crud->addField([
            'label' => 'Choices',
            'type' => 'select',
            'name' => 'choice_id', // the db column for the foreign key
            'entity' => 'choice', // the method that defines the relationship in your Model
            'attribute' => 'label', // foreign key attribute that is shown to user
            'model' => 'App\Models\Choice', // foreign key model

            'attributes' => [
               
                    'readonly' => 'readonly',
                    'style'    =>  'pointer-events:none;'

             ], // extra HTML attributes and values your input might need
        ]);

        $this->crud->addField([
            'label' => 'Examen',
            'type' => 'select',
            'name' => 'examen_id', // the db column for the foreign key
            'entity' => 'examen', // the method that defines the relationship in your Model
            'attribute' => 'label', // foreign key attribute that is shown to user
            'model' => 'App\Models\Examen', // foreign key model
            'attributes' => [
               
                    'readonly' => 'readonly',
                    'style'    =>  'pointer-events:none;'

             ], // extra HTML attributes and values your input might need
        ]);

        $this->crud->addField([ 
            'label' => 'User',
            'type' => 'select',
            'name' => 'user_id', // the db column for the foreign key
            'entity' => 'user', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => 'App\Models\User', // foreign key model

            'attributes' => [
               
                    'readonly' => 'readonly',
                    'style'    =>  'pointer-events:none;'

             ], // extra HTML attributes and values your input might need
        ]);

        $this->crud->addField([ 
            'label' => 'Question',
            'type' => 'select',
            'name' => 'question_id', // the db column for the foreign key
            'entity' => 'question', // the method that defines the relationship in your Model
            'attribute' => 'label', // foreign key attribute that is shown to user
            'model' => 'App\Models\Question', // foreign key model

            'attributes' => [
               
                    'readonly' => 'readonly',
                    'style'    =>  'pointer-events:none;'
             ], // extra HTML attributes and values your input might need
        ]);

        $this->crud->addColumn("Correction"); // add a single column, at the end of the stack

       // $this->crud->setColumnDetails('choice_id', [
       //     // 1-n relationship
       //     'label' => "Choice reponse", // Table column heading
       //     'type' => "select",
       //     'name' => 'choice_id', // the column that contains the ID of that connected entity;
       //     'entity' => 'choice', // the method that defines the relationship in your Model
       //     'attribute' => "label", // foreign key attribute that is shown to user
       //     'model' => "App\Models\Choice", // foreign key model
       //  ]);

       // $this->crud->setColumnDetails('survey_id', [
       //     // 1-n relationship
       //     'label' => "Questionnaire", // Table column heading
       //     'type' => "select",
       //     'name' => 'survey_id', // the column that contains the ID of that connected entity;
       //     'entity' => 'survey', // the method that defines the relationship in your Model
       //     'attribute' => "labelle", // foreign key attribute that is shown to user
       //     'model' => "App\Models\Questionnaire", // foreign key model
       //  ]);
       //  $this->crud->setColumnDetails('examen_id', [
       //     // 1-n relationship
       //     'label' => "Examen", // Table column heading
       //     'type' => "select",
       //     'name' => 'examen_id', // the column that contains the ID of that connected entity;
       //     'entity' => 'examen', // the method that defines the relationship in your Model
       //     'attribute' => "label", // foreign key attribute that is shown to user
       //     'model' => "App\Models\Examen", // foreign key model
       //  ]);

       // $this->crud->setColumnDetails('user_id', [
       //     // 1-n relationship
       //     'label' => "User", // Table column heading
       //     'type' => "related.text",
       //     'name' => 'user_id', // the column that contains the ID of that connected entity;
       //     'entity' => 'user', // the method that defines the relationship in your Model
       //     'attribute' => "name", // foreign key attribute that is shown to user
       //     'model' => "App\Models\User", // foreign key model
       //  ]);
        $this->crud->setColumnDetails('question_id', [
           'label' => "Question", // Table column heading
           'type' => "model_function_attribute",
           "function_name" =>'getQuestionLabel',
           'attribute'=>'label',
        ]);

        $this->crud->setColumnDetails('user_id', [
           'label' => "Etudiant", // Table column heading
           'type' => "model_function_attribute",
           "function_name" =>'getUserName',
           'attribute'=>'name',
        ]);

        $this->crud->setColumnDetails('examen_id', [
           'label' => "Examen", // Table column heading
           'type' => "model_function_attribute",
           "function_name" =>'getExamenLabel',
           'attribute'=>'label',
        ]);

        $this->crud->setColumnDetails('survey_id', [
           'label' => "Survey", // Table column heading
           'type' => "model_function_attribute",
           "function_name" =>'getSurveyLabel',
           'attribute'=>'labelle',
        ]);

        $this->crud->setColumnDetails('choice_id', [
           'label' => "Reponse attendue", // Table column heading
           'type' => "model_function_attribute",
           "function_name" =>'getChoiceLabel',
           'attribute'=>'response',
        ]);

        $this->crud->setColumnDetails('answer_value', [
           'label' => "Reponse de l'étudiant", // Table column heading
        ]);

        $this->crud->setColumnDetails('Correction', [
           'label' => "Correction", // Table column heading
           'type' => "model_function",
           "function_name" =>'getCorrection',
        ]);

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

	public function store(StoreRequest $request)
	{
		// your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
	}

	public function update(UpdateRequest $request)
	{
		// your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
	}
}
