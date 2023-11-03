<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
    <link href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css" rel="stylesheet">

    <style type="text/css">

        html, body {
            height: 100%;
            padding: 0px;
            margin: 0px;
            overflow: hidden;
        }


    </style>
</head>
<body>
<div id="gantt_here" style='width:100%; height:100%;'></div>
<script type="text/javascript">

    gantt.init("gantt_here");

</script>
</body>

{{--@section('pageScript')--}}
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>
{{--            <script type="text/javascript">--}}
{{--                $('document').ready(function () {--}}

{{--                    let data = []--}}
{{--                    axios.get('{{route('get.gantt', '9a7f7c30-53be-4486-b6ba-ddb839c1d20d')}}')--}}
{{--                        .then(function (response) {--}}
{{--                            console.log(response.data)--}}
{{--                            data = response.data--}}
{{--                            const container = document.querySelector('#example');--}}

{{--                            const hot = new Handsontable(container, {--}}
{{--                                data: data,--}}
{{--                                // rowHeaders: true,--}}
{{--                                colHeaders: true,--}}
{{--                                height: 'auto',--}}
{{--                                width: 'auto',--}}
{{--                                licenseKey: 'non-commercial-and-evaluation', // for non-commercial use only--}}
{{--                                columns: [--}}
{{--                                    {data: 'project_name'},--}}
{{--                                    {data: 'customer_name'},--}}
{{--                                    {data: 'purchase_order'}--}}
{{--                                ],--}}
{{--                            });--}}

{{--                        })--}}
{{--                        .catch(function (error) {--}}
{{--                            console.log(error)--}}
{{--                        })--}}


{{--                })--}}
{{--            </script>--}}
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
<link href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css" rel="stylesheet">
<script type="text/javascript">
    console.log('test ')
    axios.get('{{route('get.gantt')}}')
        .then(function (response) {
            const projects = response.data.data; // Assuming the projects data is inside the 'data' property of the API response

            // Parse the 'start_date' property of each project into a Date object
            projects.forEach(project => {
                project.start_date = new Date(project.start_date);
            });

            // Set the date format for DHTMLX Gantt
            gantt.config.date_format = "%Y-%m-%d %H:%i:%s";

            // Initialize and load the Gantt chart
            gantt.init("gantt_here");
            gantt.parse({data: projects}); // Pass the parsed projects data to the Gantt chart

        })
        .catch(function (error) {
            console.log(error);
        });

</script>
{{--@endsection--}}

