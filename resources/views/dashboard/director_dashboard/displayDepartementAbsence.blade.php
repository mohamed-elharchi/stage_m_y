@extends('layouts.directorLayout')
@section('title')
absence
@endsection
@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-center"> <!-- Center the table horizontally -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped" style="direction: rtl">
                    <tr>
                        <td class="borderRemove" colspan="1" rowspan="5"></td>
                        <td colspan="2">ثانوية مولاي اسماعيل التأهيلية</td>
                        <td colspan="2" rowspan="2">
                            <img src="{{ asset('img/dd.png') }}" alt="" width="100%" />
                        </td>
                        <td colspan="2">السنة الدراسية : 2024 - 2023</td>
                    </tr>
                    <tr>
                        <!-- <td class="borderRemove" colspan="1"></td> -->
                        <td colspan="2">مـديرية اقـليـم الـدريـوش</td>
                        <td colspan="2">القـسـم: {{ $departmentName }}</td>
                    </tr>
                    <tr>
                        <!-- <td colspan="1"></td> -->
                        <td colspan="3">مـن :{{ date('d-m-Y', strtotime($fromDate)) }}</td>
                        <td colspan="3">إلـى : {{ date('d-m-Y', strtotime($fromDate . ' +5 days')) }}</td>
                    </tr>
                    <tr>
                        <!-- <td class="borderRemove"></td> -->
                        <td style="width: 15%">الاثنين</td>
                        <td style="width: 15%">الثلاثاء</td>
                        <td style="width: 15%">الأربعاء</td>
                        <td style="width: 15%">الخميس</td>
                        <td style="width: 15%">الجمعة</td>
                        <td style="width: 15%">السبت</td>
                    </tr>
                    <tr>
                        <!-- <td class="borderRemove"></td> -->
                        <td>{{ date('d-m-Y', strtotime($fromDate)) }}</td>
                        <td>{{ date('d-m-Y', strtotime($fromDate . ' +1 day')) }}</td>
                        <td>{{ date('d-m-Y', strtotime($fromDate . ' +2 days')) }}</td>
                        <td>{{ date('d-m-Y', strtotime($fromDate . ' +3 days')) }}</td>
                        <td>{{ date('d-m-Y', strtotime($fromDate . ' +4 days')) }}</td>
                        <td>{{ date('d-m-Y', strtotime($fromDate . ' +5 days')) }}</td>
                    </tr>
                    <tr>
                        <td>تلاميذ يوجهون الى مكتب الغياب</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="7">الــــــــــصـــــــــبـــــــــــــاح</td>
                    </tr>
                    <tr>
                        <td>09-08</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    <tr>
                        <td>التوقيع</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '8.30/9.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>
                    <tr>
                        <td>10-09</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    <tr>
                        <td>التوقيع</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '9.30/10.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    {{-- 11-10 --}}

                    <tr>
                        <td>11-10</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    <tr>
                        <td>التوقيع</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '10.30/11.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    <tr>
                        <td>12-11</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    <tr>
                        <td>التوقيع</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '11.30/12.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7">الــــــــــمــــــــســـــــــــــاء</td>
                    </tr>

                    <tr>
                        <td>03-02</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    <tr>
                        <td>التوقيع</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '2.30/3.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    <tr>
                        <td>04-03</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    <tr>
                        <td>التوقيع</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '3.30/4.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>
                    <tr>
                        <td>05-04</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    <tr>
                        <td>التوقيع</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '4.30/5.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    <tr>
                        <td>06-05</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->absence; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>

                    <tr>
                        <td>التوقيع</td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate)))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +1 day')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +2 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +3 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +4 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                        <td>
                            @php
                            $absence = $absences->where('period', '5.30/6.30')->where('date', date('Y-m-d', strtotime($fromDate . ' +5 days')))->first();
                            if($absence) {
                                echo $absence->signature; // Replace 'data' with the actual column name you want to display
                            }
                            @endphp
                        </td>
                    </tr>
                </table>

            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button id="downloadPDF" class="btn btn-primary mt-3 mb-3">Download PDF</button> <!-- Add the button and center it -->
        </div>

    </div>


@endsection
