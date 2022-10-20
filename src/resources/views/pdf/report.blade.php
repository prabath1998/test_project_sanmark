<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        table,
        th,
        td {
            border: 1 solid;
        }

        table {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="overflow-x-auto relative mt-5 w-full">
        <h2>Speed Tracker - Report</h2>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Radius
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Start Time
                    </th>
                    <th scope="col" class="py-3 px-6">
                        End Time
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Duration
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Number Of Laps
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    @php
                        $to = \Carbon\Carbon::createFromFormat('H:i:s', $data->begin);
                        $from = \Carbon\Carbon::createFromFormat('H:i:s', $data->end);
                        //calculate difference between start valu and end value
                        $diff_in_seconds = $to->diffInSeconds($from);
                        
                        $hours = floor($diff_in_seconds / 3600);
                        $mins = floor(($diff_in_seconds / 60) % 60);
                        $secs = floor($diff_in_seconds % 60);
                        //convert seconds to time format
                        $timeFormat = sprintf('%02d:%02d:%02d', $hours, $mins, $secs);
                    @endphp

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6">
                            {{ $data->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->radius }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->begin }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->end }}
                        </td>
                        <td class="py-4 px-6">
                            {{-- {{ $diff_in_seconds }} --}}
                            {{ $timeFormat }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->laps }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
