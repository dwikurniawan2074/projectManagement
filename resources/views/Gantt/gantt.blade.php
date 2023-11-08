@extends('template.index')
@section('headerScript')
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
    <link href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            padding: 0px;
            margin: 0px;
            overflow: hidden;
        }

        .gantt_task_line.gantt_dependent_task {
            background-color: #65c16f;
            border: 1px solid #3c9445;

        }

        .gantt_task_line.gantt_dependent_task .gantt_task_progress {
            background-color: #46ad51;
        }

        .actuala_task {
            border: 2px solid #BFC518;
            color: #6ba8e3;
            background: #F2F67E;
        }

        .actuala_task .gantt_task_progress {
            background: #D9DF29;
        }

        .actualb_task {
            border: 2px solid #9e7f08;
            color: #6ba8e3;
            background: #dc8e5d;
        }

        .actualb_task .gantt_task_progress {
            background: #df6f29;
        }

        .plana_task {
            border: 2px solid #c51840;
            color: #6ba8e3;
            background: #e65f7e;
        }

        .plana_task .gantt_task_progress {
            background: #c70c37;
        }

        .planb_task {
            border: 2px solid #0a946f;
            color: #6ba8e3;
            background: #6edebf;
        }

        .planb_task .gantt_task_progress {
            background: #0a946f;
        }


    </style>
@endsection
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid" style="height: 500px;"> <!-- Set a fixed height -->
                <div id="gantt_here" style='width:100%; height:100%; position: relative'></div>
            </div>


        </div> <!-- content -->

    </div>
@endsection

@section('pageScript')
    <script type="text/javascript">

        gantt.config.lightbox.sections = [
            {name: "description", height: 70, map_to: "text", type: "textarea", focus: true},
            {name: "type", type: "typeselect", map_to: "type"},
            {name: "time", type: "duration", map_to: "auto"},
        ];

        <!-- milestone side text -->
        gantt.templates.rightside_text = function (start, end, task) {
            if (task.type == gantt.config.types.milestone) {
                return task.text;
            }
            return "";
        };

        <!-- Actual a -->
        gantt.config.types.actuala = "actuala";
        gantt.locale.labels.type_actuala = "Actual A";

        <!-- Actual b -->
        gantt.config.types.actualb = "actualb";
        gantt.locale.labels.type_actualb = "Actual B";


        <!-- Plan a -->
        gantt.config.types.plana = "plana";
        gantt.locale.labels.type_plana = "Plan A";

        <!-- Plan b -->
        gantt.config.types.planb = "planb";
        gantt.locale.labels.type_planb = "Plan B";

        gantt.templates.task_class = function (start, end, task) {
            let type = {
                actuala: "actuala_task",
                actualb: "actualb_task",
                plana: "plana_task",
                planb: "planb_task",
            }
            return type[task.type];
        };

        <!-- gantt init -->
        gantt.templates.parse_date = function (date) {
            return new Date(date);
        };
        gantt.init("gantt_here");
        gantt.load('/api/data');
        var dp = new gantt.dataProcessor("/api");
        dp.init(gantt);
        dp.setTransactionMode("REST");
    </script>
@endsection

