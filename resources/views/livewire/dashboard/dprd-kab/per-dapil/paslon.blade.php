<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="justify-center overflow-hidden bg-white shadow-sm sm:rounded-lg">

            {{-- {{ dd($suaras) }} --}}
            <ul
                class="flex justify-around py-4 text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                <li class="w-full">
                    <a href="{{ route('dashboard') }}" aria-current="page"
                        class="flex w-full p-4 text-white bg-blue-400 rounded-t-lg hover:bg-blue-500 active dark:bg-gray-800 dark:text-blue-500">Per
                        DAPIL</a>
                </li>
                <li class="w-full">
                    <a href="{{ route('dashboard.per-wilayah') }}"
                        class="flex w-full p-4 bg-gray-100 rounded-t-lg hover:text-gray-600 hover:bg-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-300">Per
                        Wilayah</a>
                </li>
            </ul>

            <div class="flex justify-end p-4">
                <a href="{{ url()->previous() }}" class="bg-slate-900 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 focus:ring-offset-slate-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400">
                    Kembali
                </a>
            </div>

            <div class="relative p-4 overflow-x-auto shadow-md sm:rounded-lg">
                <div class="py-4 text-center">
                    <h2 class="font-semibold">HASIL HITUNG SUARA PEMILU LEGISLATIF DPRD KAB/KOTA 2024</h2>
                    <p>WILAYAH PEMILIHAN KOTA PONTIANAK - PROV. KALIMANTAN BARAT</p>
                    <p>DAPIL {{ $dapilPemilihan->nama_dapil }}</p>
                    <p>{{ $bakalCalon->nama_pasangan_calon ?? ''}}</p>
                </div>

                <div class="px-4">
                    <div class="grid w-full grid-cols-1 gap-4 mt-4 md:grid-cols-2 xl:grid-cols-2">
                        <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span
                                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">{{ number_format($this->paslonActive[0]->total_suara) }}</span>
                                    <h3 class="text-base font-normal text-gray-500">Total Suara</h3>
                                </div>
                                <div class="flex items-center justify-end flex-1 w-0 ml-5 text-base font-bold text-green-500">
                                    <p>*{{ $this->persentaseTerhadapSuaraPartai }}% </p>
                                </div>
                            </div>
                            <p class="flex justify-end text-sm font-normal text-gray-500">
                                *Terhadap suara partai
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 ">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <span
                                        class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">{{ number_format($this->totalSuaraPartai) }}</span>
                                    <h3 class="text-base font-normal text-gray-500">Total suara yang didapat partai</h3>
                                </div>
                                <div
                                    class="flex items-center justify-end flex-1 w-0 ml-5 text-base font-bold text-green-500">
                                    <p>**{{ $this->persentaseTerhadapSuaraDapil }}% </p>
                                </div>
                            </div>
                            <p class="flex justify-end text-sm font-normal text-gray-500">
                                **Terhadap total suara pada DAPIL {{ $dapilPemilihan->nama_dapil }}
                            </p>
                        </div>
                    </div>

                    <div class="grid w-full grid-cols-1 gap-4 pt-6 xl:grid-cols-2 2xl:grid-cols-2">
                        {{-- <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 2xl:col-span-2">
                          <div class="flex items-center justify-between mb-4">
                             <div class="flex-shrink-0">
                                <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">$45,385</span>
                                <h3 class="text-base font-normal text-gray-500">Sales this week</h3>
                             </div>
                             <div class="flex items-center justify-end flex-1 text-base font-bold text-green-500">
                                12.5%
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                   <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                             </div>
                          </div>
                          <div id="main-chart" style="min-height: 435px;"><div id="apexchartsdfxkfby1" class="apexcharts-canvas apexchartsdfxkfby1 apexcharts-theme-light" style="width: 589px; height: 420px;"><svg id="SvgjsSvg1128" width="589" height="420" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1130" class="apexcharts-inner apexcharts-graphical" transform="translate(65.9375, 30)"><defs id="SvgjsDefs1129"><clipPath id="gridRectMaskdfxkfby1"><rect id="SvgjsRect1136" width="521.0625" height="379" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskdfxkfby1"></clipPath><clipPath id="nonForecastMaskdfxkfby1"></clipPath><clipPath id="gridRectMarkerMaskdfxkfby1"><rect id="SvgjsRect1137" width="517.0625" height="379" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1135" x1="427.0520833333333" y1="0" x2="427.0520833333333" y2="375" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="427.0520833333333" y="0" width="1" height="375" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1144" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1145" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g><line id="SvgjsLine1153" x1="0" y1="376" x2="513.0625" y2="376" stroke="#f3f4f6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG1170" class="apexcharts-grid"><g id="SvgjsG1171" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1180" x1="0" y1="0" x2="513.0625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1181" x1="0" y1="62.5" x2="513.0625" y2="62.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1182" x1="0" y1="125" x2="513.0625" y2="125" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1183" x1="0" y1="187.5" x2="513.0625" y2="187.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1184" x1="0" y1="250" x2="513.0625" y2="250" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1185" x1="0" y1="312.5" x2="513.0625" y2="312.5" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1186" x1="0" y1="375" x2="513.0625" y2="375" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1172" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1173" x1="0" y1="376" x2="0" y2="382" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1174" x1="85.51041666666667" y1="376" x2="85.51041666666667" y2="382" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1175" x1="171.02083333333334" y1="376" x2="171.02083333333334" y2="382" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1176" x1="256.53125" y1="376" x2="256.53125" y2="382" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1177" x1="342.0416666666667" y1="376" x2="342.0416666666667" y2="382" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1178" x1="427.55208333333337" y1="376" x2="427.55208333333337" y2="382" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1179" x1="513.0625" y1="376" x2="513.0625" y2="382" stroke="#f3f4f6" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1188" x1="0" y1="375" x2="513.0625" y2="375" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1187" x1="0" y1="1" x2="0" y2="375" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1138" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1139" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1142" d="M 0 375L 0 152.5C 29.928645833333334 152.5 55.58177083333334 238.75 85.51041666666667 238.75C 115.4390625 238.75 141.09218750000002 277.5 171.02083333333334 277.5C 200.94947916666666 277.5 226.60260416666668 46.25 256.53125 46.25C 286.45989583333335 46.25 312.11302083333334 152.5 342.0416666666667 152.5C 371.9703125 152.5 397.6234375 215 427.5520833333333 215C 457.48072916666666 215 483.13385416666665 340 513.0625 340C 513.0625 340 513.0625 340 513.0625 375M 513.0625 340z" fill="rgba(6,148,162,0.3)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskdfxkfby1)" pathTo="M 0 375L 0 152.5C 29.928645833333334 152.5 55.58177083333334 238.75 85.51041666666667 238.75C 115.4390625 238.75 141.09218750000002 277.5 171.02083333333334 277.5C 200.94947916666666 277.5 226.60260416666668 46.25 256.53125 46.25C 286.45989583333335 46.25 312.11302083333334 152.5 342.0416666666667 152.5C 371.9703125 152.5 397.6234375 215 427.5520833333333 215C 457.48072916666666 215 483.13385416666665 340 513.0625 340C 513.0625 340 513.0625 340 513.0625 375M 513.0625 340z" pathFrom="M -1 4125L -1 4125L 85.51041666666667 4125L 171.02083333333334 4125L 256.53125 4125L 342.0416666666667 4125L 427.5520833333333 4125L 513.0625 4125"></path><path id="SvgjsPath1143" d="M 0 152.5C 29.928645833333334 152.5 55.58177083333334 238.75 85.51041666666667 238.75C 115.4390625 238.75 141.09218750000002 277.5 171.02083333333334 277.5C 200.94947916666666 277.5 226.60260416666668 46.25 256.53125 46.25C 286.45989583333335 46.25 312.11302083333334 152.5 342.0416666666667 152.5C 371.9703125 152.5 397.6234375 215 427.5520833333333 215C 457.48072916666666 215 483.13385416666665 340 513.0625 340" fill="none" fill-opacity="1" stroke="#0694a2" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskdfxkfby1)" pathTo="M 0 152.5C 29.928645833333334 152.5 55.58177083333334 238.75 85.51041666666667 238.75C 115.4390625 238.75 141.09218750000002 277.5 171.02083333333334 277.5C 200.94947916666666 277.5 226.60260416666668 46.25 256.53125 46.25C 286.45989583333335 46.25 312.11302083333334 152.5 342.0416666666667 152.5C 371.9703125 152.5 397.6234375 215 427.5520833333333 215C 457.48072916666666 215 483.13385416666665 340 513.0625 340" pathFrom="M -1 4125L -1 4125L 85.51041666666667 4125L 171.02083333333334 4125L 256.53125 4125L 342.0416666666667 4125L 427.5520833333333 4125L 513.0625 4125"></path><g id="SvgjsG1140" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1194" r="0" cx="427.5520833333333" cy="215" class="apexcharts-marker w9lesocisi no-pointer-events" stroke="#ffffff" fill="#0694a2" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1141" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1189" x1="0" y1="0" x2="513.0625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1190" x1="0" y1="0" x2="513.0625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1191" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1192" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1193" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1195" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1196" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1134" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1154" class="apexcharts-yaxis" rel="0" transform="translate(35.9375, 0)"><g id="SvgjsG1155" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1156" font-family="Inter, sans-serif" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan1157">$6600</tspan><title>$6600</title></text><text id="SvgjsText1158" font-family="Inter, sans-serif" x="20" y="94.1" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan1159">$6500</tspan><title>$6500</title></text><text id="SvgjsText1160" font-family="Inter, sans-serif" x="20" y="156.6" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan1161">$6400</tspan><title>$6400</title></text><text id="SvgjsText1162" font-family="Inter, sans-serif" x="20" y="219.1" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan1163">$6300</tspan><title>$6300</title></text><text id="SvgjsText1164" font-family="Inter, sans-serif" x="20" y="281.6" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan1165">$6200</tspan><title>$6200</title></text><text id="SvgjsText1166" font-family="Inter, sans-serif" x="20" y="344.1" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan1167">$6100</tspan><title>$6100</title></text><text id="SvgjsText1168" font-family="Inter, sans-serif" x="20" y="406.6" text-anchor="end" dominant-baseline="auto" font-size="14px" font-weight="500" fill="#6b7280" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, sans-serif;"><tspan id="SvgjsTspan1169">$6000</tspan><title>$6000</title></text></g></g><g id="SvgjsG1131" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 210px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 331.724px; top: 218px;"><div class="apexcharts-tooltip-title" style="font-family: Inter, sans-serif; font-size: 14px;">06 Feb</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(6, 148, 162);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter, sans-serif; font-size: 14px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Revenue: </span><span class="apexcharts-tooltip-text-y-value">$6256</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 457.083px; top: 407px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Inter, sans-serif; font-size: 12px; min-width: 49.8125px;">06 Feb</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                       </div> --}}
                        <div class="p-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 ">
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <h3 class="mb-2 text-xl font-bold text-gray-900">Kedudukan di Partai</h3>
                                    <span class="text-base font-normal text-gray-500">List bakal calon di partai
                                        nya..</span>
                                </div>
                                {{-- <div class="flex-shrink-0">
                                <a href="#" class="p-2 text-sm font-medium rounded-lg text-cyan-600 hover:bg-gray-100">View all</a>
                             </div> --}}
                            </div>
                            <div class="flex flex-col mt-8">
                                <div class="overflow-x-auto rounded-lg">
                                    <div class="inline-block min-w-full align-middle">
                                        <div class="overflow-hidden shadow sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                            Nama bakal calon
                                                        </th>
                                                        {{-- <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                  Last update
                                               </th> --}}
                                                        <th scope="col"
                                                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                            Total suara
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                    {{-- {{ dd($paslons) }} --}}
                                                    @foreach ($suaras as $suara)
                                                    @foreach ($paslons as $paslon)
                                                    @if ($suara->pasangan_calon_id == $paslon->id)
                                                    <tr
                                                        class="@if ($paslon->id == $this->dapilPaslonActive) bg-gray-100 @endif">
                                                        <td
                                                            class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                                                            <p
                                                                class="font-semibold @if ($paslon->id == $this->dapilPaslonActive) text-blue-600 @endif">
                                                                {{ $paslon->nama_pasangan_calon }}</p>
                                                        </td>
                                                        {{-- <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                                                            Apr 23 ,2021
                                                        </td> --}}
                                                        <td
                                                            class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap">
                                                            {{ number_format($suara->total_suara ?? 0) }}
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 my-4 2xl:grid-cols-2 xl:gap-4">
                        {{-- <div class="h-full p-4 mb-4 bg-white rounded-lg shadow sm:p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-bold leading-none text-gray-900">Latest Customers</h3>
                                <a href="#"
                                    class="inline-flex items-center p-2 text-sm font-medium rounded-lg text-cyan-600 hover:bg-gray-100">
                                    View all
                                </a>
                            </div>
                            <div class="flow-root">
                                <ul role="list" class="divide-y divide-gray-200">
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full"
                                                    src="https://demo.themesberg.com/windster/images/users/neil-sims.png"
                                                    alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-gray-900 truncate">
                                                    Neil Sims
                                                </p>
                                                <p class="text-sm text-gray-500 truncate">
                                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                        data-cfemail="17727a767e7b57607e7973646372653974787a">[email&nbsp;protected]</a>
                                                </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                $320
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full"
                                                    src="https://demo.themesberg.com/windster/images/users/bonnie-green.png"
                                                    alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-gray-900 truncate">
                                                    Bonnie Green
                                                </p>
                                                <p class="text-sm text-gray-500 truncate">
                                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                        data-cfemail="d4b1b9b5bdb894a3bdbab0a7a0b1a6fab7bbb9">[email&nbsp;protected]</a>
                                                </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                $3467
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full"
                                                    src="https://demo.themesberg.com/windster/images/users/michael-gough.png"
                                                    alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-gray-900 truncate">
                                                    Michael Gough
                                                </p>
                                                <p class="text-sm text-gray-500 truncate">
                                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                        data-cfemail="57323a363e3b17203e3933242332257934383a">[email&nbsp;protected]</a>
                                                </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                $67
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full"
                                                    src="https://demo.themesberg.com/windster/images/users/thomas-lean.png"
                                                    alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-gray-900 truncate">
                                                    Thomes Lean
                                                </p>
                                                <p class="text-sm text-gray-500 truncate">
                                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                        data-cfemail="284d45494144685f41464c5b5c4d5a064b4745">[email&nbsp;protected]</a>
                                                </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                $2367
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 pb-0 sm:pt-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <img class="w-8 h-8 rounded-full"
                                                    src="https://demo.themesberg.com/windster/images/users/lana-byrd.png"
                                                    alt="Neil image">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-gray-900 truncate">
                                                    Lana Byrd
                                                </p>
                                                <p class="text-sm text-gray-500 truncate">
                                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                        data-cfemail="a2c7cfc3cbcee2d5cbccc6d1d6c7d08cc1cdcf">[email&nbsp;protected]</a>
                                                </p>
                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                                $367
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}

                        <div class="p-4 mt-4 bg-white rounded-lg shadow sm:p-6 xl:p-8 ">
                            <h3 class="mb-10 text-xl font-bold leading-none text-gray-900">Perolehan suara di daerah</h3>
                            <div class="block w-full overflow-x-auto">
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap">
                                                Nama daerah
                                            </th>
                                            <th
                                                class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap">
                                                Total DPT
                                            </th>
                                            <th
                                                class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap min-w-140-px">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                        <tr class="text-gray-500">
                                            <th
                                                class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                                Organic Search</th>
                                            <td
                                                class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                                5,649</td>
                                            <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <span class="mr-2 text-xs font-medium">30%</span>
                                                    <div class="relative w-full">
                                                        <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                            <div class="h-2 rounded-sm bg-cyan-600" style="width: 30%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-500">
                                            <th
                                                class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                                Referral</th>
                                            <td
                                                class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                                4,025</td>
                                            <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <span class="mr-2 text-xs font-medium">24%</span>
                                                    <div class="relative w-full">
                                                        <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                            <div class="h-2 bg-orange-300 rounded-sm"
                                                                style="width: 24%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-500">
                                            <th
                                                class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                                Direct</th>
                                            <td
                                                class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                                3,105</td>
                                            <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <span class="mr-2 text-xs font-medium">18%</span>
                                                    <div class="relative w-full">
                                                        <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                            <div class="h-2 bg-teal-400 rounded-sm" style="width: 18%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-500">
                                            <th
                                                class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                                Social</th>
                                            <td
                                                class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                                1251</td>
                                            <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <span class="mr-2 text-xs font-medium">12%</span>
                                                    <div class="relative w-full">
                                                        <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                            <div class="h-2 bg-pink-600 rounded-sm" style="width: 12%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-500">
                                            <th
                                                class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                                Other</th>
                                            <td
                                                class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                                734</td>
                                            <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <span class="mr-2 text-xs font-medium">9%</span>
                                                    <div class="relative w-full">
                                                        <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                            <div class="h-2 bg-indigo-600 rounded-sm" style="width: 9%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-500">
                                            <th
                                                class="p-4 pb-0 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">
                                                Email</th>
                                            <td
                                                class="p-4 pb-0 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">
                                                456</td>
                                            <td class="p-4 pb-0 text-xs align-middle border-t-0 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <span class="mr-2 text-xs font-medium">7%</span>
                                                    <div class="relative w-full">
                                                        <div class="w-full h-2 bg-gray-200 rounded-sm">
                                                            <div class="h-2 bg-purple-500 rounded-sm" style="width: 7%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="grid grid-cols-3 gap-4">
                    @forelse ($partais as $partai)

                    <div class="px-4 py-2 border-4 border-gray-500">
                        <div class="flex items-center py-4 border-b gap-x-4">
                            <div class="flex items-center max-w-sm">
                                <p class="font-semibold leading-6 text-gray-900">{{ $partai->id }}</p>
            </div>
            <img class="flex-none w-12 h-12 bg-gray-50"
                src="https://th.bing.com/th/id/OIP.sGcwi0Tb3Nm3WvDzjrLR4QHaIf?pid=ImgDet&rs=1" alt="">
            <div class="flex items-center min-w-0">
                <p class="font-semibold leading-6 text-gray-900">{{ $partai->nama_partai }}</p>
            </div>
        </div>
        <ul role="list" class="divide-y divide-gray-100">
            @forelse ($paslons as $paslon)
            @if ($partai->id == $paslon->data_partai_id)
            <li class="flex justify-between py-2 gap-x-6">
                <div class="flex gap-x-2">
                    <p class="text-sm leading-6 text-gray-900 first-letter:font-semibold">{{ $paslon->nomor_urut }}</p>
                    <a href="{{ route('dashboard.per-dapil-paslon', ['dapil' => $this->dataDapilActive, 'paslon' => $paslon->id]) }}"
                        class="text-sm font-semibold leading-6 text-gray-900 text-start">{{ $paslon->nama_pasangan_calon }}</a>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                    @foreach ($suaras as $suara)
                    @if ($paslon->id == $suara->pasangan_calon_id)
                    <p class="text-sm leading-6 text-gray-900">{{ $suara->total_suara }}</p>
                    @endif
                    @endforeach
                </div>
            </li>
            @endif
            @empty

            @endforelse
        </ul>
    </div>

    @empty

    @endforelse

</div> --}}

</div>

</div>
</div>
</div>
