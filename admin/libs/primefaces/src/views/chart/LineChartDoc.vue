<template>
	<div class="content-section documentation">
		<TabView>
			<TabPanel header="Source">
<CodeHighlight>
<template v-pre>
&lt;template&gt;
	&lt;div&gt;
		&lt;div class=&quot;content-section introduction&quot;&gt;
			&lt;div class=&quot;feature-intro&quot;&gt;
				&lt;h1&gt;Line Chart&lt;/h1&gt;
				&lt;p&gt;A line chart or line graph is a type of chart which displays information as a series of data points called 'markers' connected by straight line segments.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;

		&lt;div class=&quot;content-section implementation&quot;&gt;
			&lt;h3 class=&quot;first&quot;&gt;Basic&lt;/h3&gt;
			&lt;Chart type=&quot;line&quot; :data=&quot;basicData&quot; /&gt;

			&lt;h3&gt;Multi Axis&lt;/h3&gt;
			&lt;Chart type=&quot;line&quot; :data=&quot;multiAxisData&quot; :options=&quot;multiAxisOptions&quot; /&gt;

			&lt;h3&gt;Line Styles&lt;/h3&gt;
			&lt;Chart type=&quot;line&quot; :data=&quot;lineStylesData&quot; /&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/template&gt;
</template>
</CodeHighlight>

<CodeHighlight lang="javascript">
export default {
	data() {
		return {
			basicData: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [
					{
						label: 'First Dataset',
						data: [65, 59, 80, 81, 56, 55, 40],
						fill: false,
						backgroundColor: '#2f4860',
						borderColor: '#2f4860'
					},
					{
						label: 'Second Dataset',
						data: [28, 48, 40, 19, 86, 27, 90],
						fill: false,
						backgroundColor: '#00bb7e',
						borderColor: '#00bb7e'
					}
				]
			},
			multiAxisData: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [
					{
						label: 'Dataset 1',
						fill: false,
						backgroundColor: '#2f4860',
						borderColor: '#2f4860',
						yAxisID: 'y-axis-1',
						data: [65, 59, 80, 81, 56, 55, 10]
					},
					{
						label: 'Dataset 2',
						fill: false,
						backgroundColor: '#00bb7e',
						borderColor: '#00bb7e',
						yAxisID: 'y-axis-2',
						data: [28, 48, 40, 19, 86, 27, 90]
					}
				]
			},
			multiAxisOptions: {
				responsive: true,
				hoverMode: 'index',
				stacked: false,
				scales: {
					yAxes: [
						{
							type: 'linear',
							display: true,
							position: 'left',
							id: 'y-axis-1',
						},
						{
							type: 'linear',
							display: true,
							position: 'right',
							id: 'y-axis-2',
							gridLines: {
								drawOnChartArea: false
							}
						}
					]
				}
			},
			lineStylesData: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [
					{
						label: 'First Dataset',
						data: [65, 59, 80, 81, 56, 55, 40],
						fill: false,
						borderColor: '#42A5F5'
					},
					{
						label: 'Second Dataset',
						data: [28, 48, 40, 19, 86, 27, 90],
						fill: false,
						borderDash: [5, 5],
						borderColor: '#66BB6A'
					},
					{
						label: 'Third Dataset',
						data: [12, 51, 62, 33, 21, 62, 45],
						fill: true,
						borderColor: '#FFA726',
						backgroundColor: '#FFCC80'
					}
				]
			}
		}
	}
}
</CodeHighlight>
			</TabPanel>
		</TabView>
	</div>
</template>