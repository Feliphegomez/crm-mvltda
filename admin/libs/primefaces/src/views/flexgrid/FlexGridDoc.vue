<template>
	<div class="content-section documentation flexgrid-demo">
		<TabView>
			<TabPanel header="Documentation">
				<h3>Getting Started</h3>
				<p>FlexGrid is a CSS utility based on flexbox. For more information about Flex, visit <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">A Complete Guide to Flexbox</a>. A basic grid is defined by giving
					a container <i>p-grid</i> class and children the <i>p-col</i> class. Children of the grid will have the same width and scale according to the width of the parent.</p>
<CodeHighlight>
&lt;div class=&quot;p-grid&quot;&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;2&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;3&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

<div class="p-grid">
	<div class="p-col">
		<div class="box">1</div>
	</div>
	<div class="p-col">
		<div class="box">2</div>
	</div>
	<div class="p-col">
		<div class="box">3</div>
	</div>
</div>

				<h3>Direction</h3>
				<p>Default direction is <b>row</b> and <i>p-dir-*</i> class at the container defines the other possible directions which can be <b>row reverse</b>, <b>column</b> and <b>column reverse</b></p>
<CodeHighlight>
<!-- Row Reverse -->
&lt;div class=&quot;p-grid p-dir-rev&quot;&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;2&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;3&lt;/div&gt;
&lt;/div&gt;

<!-- Column -->
&lt;div class=&quot;p-grid p-dir-col&quot;&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;2&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;3&lt;/div&gt;
&lt;/div&gt;

<!-- Column Reverse -->
&lt;div class=&quot;p-grid p-dir-col-rev&quot;&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;2&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;3&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

<div class="p-grid p-dir-rev">
	<div class="p-col">
		<div class="box">1</div>
	</div>
	<div class="p-col">
		<div class="box">2</div>
	</div>
	<div class="p-col">
		<div class="box">3</div>
	</div>
</div>

<div class="p-grid p-dir-col">
	<div class="p-col">
		<div class="box">1</div>
	</div>
	<div class="p-col">
		<div class="box">2</div>
	</div>
	<div class="p-col">
		<div class="box">3</div>
	</div>
</div>

<div class="p-grid p-dir-col-rev">
	<div class="p-col">
		<div class="box">1</div>
	</div>
	<div class="p-col">
		<div class="box">2</div>
	</div>
	<div class="p-col">
		<div class="box">3</div>
	</div>
</div>
				<h3>12 Column Grid</h3>
				<p>FlexGrid includes a 12 column based layout utility where width of a column is defined with the <i>p-col-&#123;number&#125;</i> style class. Columns with prefined widths can be used with columns with auto width (p-col) as well.</p>

				<p>In the first example below, first column covers the 4 units out of 12 and the rest of the columns share the remaining space whereas in the second example, all three columns have explicit units.</p>
<CodeHighlight>
&lt;div class=&quot;p-grid&quot;&gt;
	&lt;div class=&quot;p-col-4&quot;&gt;4&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;p-grid&quot;&gt;
	&lt;div class=&quot;p-col-2&quot;&gt;2&lt;/div&gt;
	&lt;div class=&quot;p-col-6&quot;&gt;6&lt;/div&gt;
	&lt;div class=&quot;p-col-4&quot;&gt;4&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

<div class="p-grid">
	<div class="p-col-4">
		<div class="box">4</div>
	</div>
	<div class="p-col">
		<div class="box">1</div>
	</div>
	<div class="p-col">
		<div class="box">1</div>
	</div>
	<div class="p-col">
		<div class="box">1</div>
	</div>
	<div class="p-col">
		<div class="box">1</div>
	</div>
	<div class="p-col">
		<div class="box">1</div>
	</div>
	<div class="p-col">
		<div class="box">1</div>
	</div>
	<div class="p-col">
		<div class="box">1</div>
	</div>
	<div class="p-col">
		<div class="box">1</div>
	</div>
</div>

<div class="p-grid">
	<div class="p-col-2">
		<div class="box">2</div>
	</div>
	<div class="p-col-6">
		<div class="box">6</div>
	</div>
	<div class="p-col-4">
		<div class="box">4</div>
	</div>
</div>

				<h3>MultiLine</h3>
				<p>When the number of columns exceed 12, columns wrap to a new line.</p>
<CodeHighlight>
&lt;div class=&quot;p-grid&quot;&gt;
	&lt;div class=&quot;p-col-6&quot;&gt;6&lt;/div&gt;
	&lt;div class=&quot;p-col-6&quot;&gt;6&lt;/div&gt;
	&lt;div class=&quot;p-col-6&quot;&gt;6&lt;/div&gt;
	&lt;div class=&quot;p-col-6&quot;&gt;6&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

<div class="p-grid">
	<div class="p-col-6">
		<div class="box">6</div>
	</div>
	<div class="p-col-6">
		<div class="box">6</div>
	</div>
	<div class="p-col-6">
		<div class="box">6</div>
	</div>
	<div class="p-col-6">
		<div class="box">6</div>
	</div>
</div>

				<h3>Fixed Width Column</h3>
				<p>A column can have a fixed width while siblings having auto width. Apply <i>p-col-fixed</i> class to fix a column width.</p>
<CodeHighlight>
&lt;div class=&quot;p-grid&quot;&gt;
	&lt;div class=&quot;p-col-fixed&quot; style=&quot;width:100px&quot;&gt;Fixed&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;Auto&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

<div class="p-grid">
	<div class="p-col-fixed" style="width:100px">
		<div class="box">100px</div>
	</div>
	<div class="p-col">
		<div class="box">auto</div>
	</div>
</div>
				<h3>Responsive</h3>
				<p>Responsive layout is achieved by applying breakpoint specific classes to the columns whereas <i>p-col-*</i> define the default behavior for mobile devices with small screens. Four screen sizes are supported with different breakpoints.</p>
				<div class="doc-tablewrapper">
					<table class="doc-table">
						<thead>
						<tr>
							<th>Prefix</th>
							<th>Devices</th>
							<th>Media Query</th>
							<th>Example</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>p-sm-*</td>
							<td>Small devices</td>
							<td>min-width: 576px</td>
							<td>p-sm-6, p-sm-4</td>
						</tr>
						<tr>
							<td>p-md-*</td>
							<td>Medium sized devices such as tablets</td>
							<td>min-width: 768px</td>
							<td>p-md-2, p-md-8</td>
						</tr>
						<tr>
							<td>p-lg-*</td>
							<td>Devices with large screen like desktops</td>
							<td>min-width: 992px</td>
							<td>p-lg-6, p-lg-12</td>
						</tr>
						<tr>
							<td>p-xl-*</td>
							<td>Big screen monitors</td>
							<td>min-width: 1200px</td>
							<td>p-xl-2, ui-xl-10</td>
						</tr>
						</tbody>
					</table>
				</div>

				<p>In example below, large screens display 4 columns, medium screens display 2 columns in 2 rows and finally on small devices, columns are stacked.</p>
<CodeHighlight>
&lt;div class=&quot;p-grid&quot;&gt;
	&lt;div class=&quot;p-col-12 p-md-6 p-lg-3&quot;&gt;A&lt;/div&gt;
	&lt;div class=&quot;p-col-12 p-md-6 p-lg-3&quot;&gt;B&lt;/div&gt;
	&lt;div class=&quot;p-col-12 p-md-6 p-lg-3&quot;&gt;C&lt;/div&gt;
	&lt;div class=&quot;p-col-12 p-md-6 p-lg-3&quot;&gt;D&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

<div class="p-grid">
	<div class="p-col-12 p-md-6 p-lg-3">
		<div class="box">A</div>
	</div>
	<div class="p-col-12 p-md-6 p-lg-3">
		<div class="box">B</div>
	</div>
	<div class="p-col-12 p-md-6 p-lg-3">
		<div class="box">C</div>
	</div>
	<div class="p-col-12 p-md-6 p-lg-3">
		<div class="box">D</div>
	</div>
</div>

				<h3>Horizontal Alignment</h3>
				<p><i>p-justify-*</i> classes are used on the container element to define the alignment along the main axis.</p>
				<div class="doc-tablewrapper">
					<table class="doc-table">
						<thead>
						<tr>
							<th>Class</th>
							<th>Description</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>p-justify-start (default)</td>
							<td>Items are packed toward the start line</td>
						</tr>
						<tr>
							<td>p-justify-end</td>
							<td>Items are packed toward to end line</td>
						</tr>
						<tr>
							<td>p-justify-center</td>
							<td>Items are centered along the line</td>
						</tr>
						<tr>
							<td>p-justify-between</td>
							<td>Items are evenly distributed in the line; first item is on the start line, last item on the end line</td>
						</tr>
						<tr>
							<td>p-justify-around</td>
							<td>Items are evenly distributed in the line with equal space around them.</td>
						</tr>
						<tr>
							<td>p-justify-even</td>
							<td>Items are distributed so that the spacing between any two items (and the space to the edges) is equal.</td>
						</tr>
						</tbody>
					</table>
				</div>
<CodeHighlight>
&lt;div class=&quot;p-grid p-justify-between&quot;&gt;
	&lt;div class=&quot;p-col-2&quot;&gt;2&lt;/div&gt;
	&lt;div class=&quot;p-col-1&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col-4&quot;&gt;4&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

<div class="p-grid p-justify-between">
	<div class="p-col-2">
		<div class="box">2</div>
	</div>
	<div class="p-col-1">
		<div class="box">1</div>
	</div>
	<div class="p-col-4">
		<div class="box">4</div>
	</div>
</div>

				<h3>Vertical Alignment</h3>
				<p><i>p-align-*</i> classes are used on the container element to define the alignment along the cross axis.</p>
				<div class="doc-tablewrapper">
					<table class="doc-table">
						<thead>
						<tr>
							<th>Class</th>
							<th>Description</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>p-align-stretch (default)</td>
							<td>Stretch to fill the container.</td>
						</tr>
						<tr>
							<td>p-align-start</td>
							<td>Cross-start margin edge of the items is placed on the cross-start line</td>
						</tr>
						<tr>
							<td>p-align-end</td>
							<td>Cross-end margin edge of the items is placed on the cross-end line</td>
						</tr>
						<tr>
							<td>p-align-center</td>
							<td>Items are centered in the cross-axis</td>
						</tr>
						<tr>
							<td>p-align-baseline</td>
							<td>Items are aligned such as their baselines align</td>
						</tr>
						</tbody>
					</table>
				</div>
<CodeHighlight>
&lt;div class=&quot;p-grid p-align-center&quot;&gt;
	&lt;div class=&quot;p-col&quot;&gt;4&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;4&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;4&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

<div class="p-grid p-align-center vertical-container">
	<div class="p-col">
		<div class="box">4</div>
	</div>
	<div class="p-col">
		<div class="box">4</div>
	</div>
	<div class="p-col">
		<div class="box">4</div>
	</div>
</div>
				<p>Vertical alignment can also be defined at column level with the <i>p-align-col-*</i> classes.</p>
				<div class="doc-tablewrapper">
					<table class="doc-table">
						<thead>
						<tr>
							<th>Class</th>
							<th>Description</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>p-col-align-stretch</td>
							<td>Stretch to fill the container.</td>
						</tr>
						<tr>
							<td>p-col-align-start</td>
							<td>Cross-start margin edge of the items is placed on the cross-start line</td>
						</tr>
						<tr>
							<td>p-col-align-end</td>
							<td>Cross-end margin edge of the items is placed on the cross-end line</td>
						</tr>
						<tr>
							<td>p-col-align-center</td>
							<td>Items are centered in the cross-axis</td>
						</tr>
						<tr>
							<td>p-col-align-baseline</td>
							<td>Items are aligned such as their baselines align</td>
						</tr>
						</tbody>
					</table>
				</div>
<CodeHighlight>
&lt;div class=&quot;p-grid&quot;&gt;
	&lt;div class=&quot;p-col p-col-align-start&quot;&gt;4&lt;/div&gt;
	&lt;div class=&quot;p-col p-col-align-center&quot;&gt;4&lt;/div&gt;
	&lt;div class=&quot;p-col p-col-align-end&quot;&gt;4&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

<div class="p-grid vertical-container">
	<div class="p-col p-col-align-start">
		<div class="box">4</div>
	</div>
	<div class="p-col p-col-align-center">
		<div class="box">4</div>
	</div>
	<div class="p-col p-col-align-end">
		<div class="box">4</div>
	</div>
</div>

				<h3>Offset</h3>
				<p>Offset classes allow defining a left margin on a column to avoid adding empty columns for spacing.</p>
<CodeHighlight>
&lt;div class=&quot;p-grid&quot;&gt;
	&lt;div class=&quot;p-col-6 p-offset-3&quot;&gt;6&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;p-grid&quot;&gt;
	&lt;div class=&quot;p-col-4&quot;&gt;4&lt;/div&gt;
	&lt;div class=&quot;p-col-4 p-offset-4&quot;&gt;4&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

<div class="p-grid">
	<div class="p-col-6 p-offset-3">
		<div class="box">6</div>
	</div>
</div>

<div class="p-grid">
	<div class="p-col-4">
		<div class="box">4</div>
	</div>
	<div class="p-col-4 p-offset-4">
		<div class="box">4</div>
	</div>
</div>
				<p>The list of offset classes varying within a range of 1 to 12.</p>
				<div class="doc-tablewrapper">
					<table class="doc-table">
						<thead>
						<tr>
							<th>Prefix</th>
							<th>Devices</th>
							<th>Media Query</th>
							<th>Example</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>p-col-offset-*</td>
							<td>All devices</td>
							<td>All screens</td>
							<td>p-col-offset-6, p-col-offset-4</td>
						</tr>
						<tr>
							<td>p-sm-offset-*</td>
							<td>Small devices</td>
							<td>min-width: 576px</td>
							<td>p-sm-offset-6, p-sm-offset-4</td>
						</tr>
						<tr>
							<td>p-md-offset-*</td>
							<td>Medium sized devices such as tablets</td>
							<td>min-width: 768px</td>
							<td>p-md-offset-6, p-md-offset-4</td>
						</tr>
						<tr>
							<td>p-lg-offset-*</td>
							<td>Devices with large screen like desktops</td>
							<td>min-width: 992px</td>
							<td>p-lg-offset-6, p-lg-offset-4</td>
						</tr>
						<tr>
							<td>p-xl-offset-*</td>
							<td>Big screen monitors</td>
							<td>min-width: 1200px</td>
							<td>p-xl-offset-6, p-xl-offset-4</td>
						</tr>
						</tbody>
					</table>
				</div>

				<h3>Nested</h3>
				<p>Columns can be nested to create more complex layouts.</p>
<CodeHighlight>
&lt;div class=&quot;p-grid nested-grid&quot;&gt;
	&lt;div class=&quot;p-col-8&quot;&gt;
		&lt;div class=&quot;p-grid&quot;&gt;
			&lt;div class=&quot;p-col-6&quot;&gt;
				6
			&lt;/div&gt;
			&lt;div class=&quot;p-col-6&quot;&gt;
				6
			&lt;/div&gt;
			&lt;div class=&quot;p-col-12&quot;&gt;
				12
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class=&quot;p-col-4&quot;&gt;
		4
	&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

<div class="p-grid nested-grid">
	<div class="p-col-8">
		<div class="p-grid">
			<div class="p-col-6">
				<div class="box">6</div>
			</div>
			<div class="p-col-6">
				<div class="box">6</div>
			</div>
			<div class="p-col-12">
				<div class="box">12</div>
			</div>
		</div>
	</div>
	<div class="p-col-4">
		<div class="box box-stretched">4</div>
	</div>
</div>

				<h3>Gutter</h3>
				<p>A .5 em padding is applied to each column along with negative margins on the container element, in case you'd like to remove these gutters, apply
					<i>p-nogutter</i> class to the container. Gutters can also be removed on an ndividual columns with the same class name.
				</p>
<CodeHighlight>
&lt;div class=&quot;p-grid p-nogutter&quot;&gt;
	&lt;div class=&quot;p-col&quot;&gt;1&lt;/div&gt;
	&lt;div class=&quot;p-col p-nogutter&quot;&gt;2&lt;/div&gt;
	&lt;div class=&quot;p-col&quot;&gt;3&lt;/div&gt;
&lt;/div&gt;
</CodeHighlight>

				<h3>Customization</h3>
				<p>PrimeFlex allows customization of breakpoints and gutters via SASS variables, visit the <a href="https://github.com/primefaces/primeflex">PrimeFlex</a> repository to get access to the primeflex.scss file to build your own customized Grid.</p>

			</TabPanel>

			<TabPanel header="Source">
				<a href="https://github.com/primefaces/primevue/tree/master/src/views/flexgrid" class="btn-viewsource" target="_blank" rel="noopener noreferrer">
					<span>View on GitHub</span>
				</a>
<CodeHighlight>
<template v-pre>
&lt;template&gt;
	&lt;div&gt;
		&lt;div class=&quot;content-section introduction&quot;&gt;
			&lt;div class=&quot;feature-intro&quot;&gt;
				&lt;h1&gt;FlexGrid&lt;/h1&gt;
				&lt;p&gt;Flex Grid CSS is a lightweight flex based responsive layout utility optimized for mobile phones, tablets and desktops.
					Flex Grid CSS is not included in PrimeReact as it is provided by &lt;a href=&quot;https://github.com/primefaces/primeflex&quot;&gt;PrimeFlex&lt;/a&gt; , a shared grid library between PrimeFaces, PrimeNG, PrimeReact and PrimeVue projects.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;

		&lt;div class=&quot;content-section implementation flexgrid-demo&quot;&gt;
			&lt;h3 class=&quot;first&quot;&gt;Basic&lt;/h3&gt;
			&lt;div class=&quot;p-grid&quot;&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;3&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Dynamic&lt;/h3&gt;
			&lt;Button type=&quot;button&quot; icon=&quot;pi pi-plus&quot; title=&quot;Add Column&quot; @click=&quot;addColumn&quot; :disabled=&quot;columns.length === 20&quot; style=&quot;margin-right: .5em&quot; /&gt;
			&lt;Button type=&quot;button&quot; icon=&quot;pi pi-minus&quot; title=&quot;Remove Column&quot; @click=&quot;removeColumn&quot; :disabled=&quot;columns.length === 1&quot; /&gt;

			&lt;div style=&quot;margin-top: .5em&quot;&gt;
				&lt;transition-group name=&quot;dynamic-box&quot; tag=&quot;div&quot; class=&quot;p-grid&quot;&gt;
					&lt;div v-for=&quot;col of columns&quot; :key=&quot;col&quot; class=&quot;p-col&quot;&gt;
						&lt;div class=&quot;box&quot;&gt;{{col}}&lt;/div&gt;
					&lt;/div&gt;
				&lt;/transition-group&gt;
			&lt;/div&gt;

			&lt;h3&gt;Reverse Direction&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-dir-rev&quot;&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;3&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Column Direction&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-dir-col&quot;&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;3&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Reverse Column Direction&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-dir-col-rev&quot;&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;3&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;12 Column Grid&lt;/h3&gt;
			&lt;div class=&quot;p-grid&quot;&gt;
				&lt;div class=&quot;p-col-4&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;div class=&quot;p-grid&quot;&gt;
				&lt;div class=&quot;p-col-2&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-6&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;6&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-4&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;div class=&quot;p-grid&quot;&gt;
				&lt;div class=&quot;p-col-8&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;8&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-2&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-2&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;MultiLine&lt;/h3&gt;
			&lt;div class=&quot;p-grid&quot;&gt;
				&lt;div class=&quot;p-col-6&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;6&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-6&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;6&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-6&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;6&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-6&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;6&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Fixed Width Column&lt;/h3&gt;
			&lt;div class=&quot;p-grid&quot;&gt;
				&lt;div class=&quot;p-col-fixed&quot; style=&quot;width:100px&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;100px&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;auto&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Responsive&lt;/h3&gt;
			&lt;div class=&quot;p-grid&quot;&gt;
				&lt;div class=&quot;p-col-12 p-md-6 p-lg-3&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;p-col-12 p-md-6 p-lg-3&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-12 p-md-6 p-lg-3&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;p-col-12 p-md-6 p-lg-3&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-12 p-md-6 p-lg-3&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;p-col-12 p-md-6 p-lg-3&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-12 p-md-6 p-lg-3&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;p-col-12 p-md-6 p-lg-3&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Horizontal Alignment - Start&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-justify-start&quot;&gt;
				&lt;div class=&quot;p-col-2&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-1&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-4&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Horizontal Alignment - End&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-justify-end&quot;&gt;
				&lt;div class=&quot;p-col-2&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-1&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-4&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Horizontal Alignment - Center&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-justify-center&quot;&gt;
				&lt;div class=&quot;p-col-2&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-1&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-4&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Horizontal Alignment - Between&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-justify-between&quot;&gt;
				&lt;div class=&quot;p-col-2&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-1&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-4&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Horizontal Alignment - Around&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-justify-around&quot;&gt;
				&lt;div class=&quot;p-col-2&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-1&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-4&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Horizontal Alignment - Even&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-justify-even&quot;&gt;
				&lt;div class=&quot;p-col-2&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;2&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-1&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;1&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-4&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Vertical Alignment - Start&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-align-start vertical-container&quot;&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Vertical Alignment - End&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-align-end vertical-container&quot;&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Vertical Alignment - Center&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-align-center vertical-container&quot;&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Vertical Alignment - Stretch&lt;/h3&gt;
			&lt;div class=&quot;p-grid p-align-stretch vertical-container&quot;&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box box-stretched&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box box-stretched&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;div class=&quot;box box-stretched&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Vertical Alignment - Per Column&lt;/h3&gt;
			&lt;div class=&quot;p-grid vertical-container&quot;&gt;
				&lt;div class=&quot;p-col p-col-align-start&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col p-col-align-center&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col p-col-align-end&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Offset&lt;/h3&gt;
			&lt;div class=&quot;p-grid&quot;&gt;
				&lt;div class=&quot;p-col-6 p-offset-3&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;6&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;div class=&quot;p-grid&quot;&gt;
				&lt;div class=&quot;p-col-4&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-4 p-offset-4&quot;&gt;
					&lt;div class=&quot;box&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Nested&lt;/h3&gt;
			&lt;div class=&quot;p-grid nested-grid&quot;&gt;
				&lt;div class=&quot;p-col-8&quot;&gt;
					&lt;div class=&quot;p-grid&quot;&gt;
						&lt;div class=&quot;p-col-6&quot;&gt;
							&lt;div class=&quot;box&quot;&gt;6&lt;/div&gt;
						&lt;/div&gt;
						&lt;div class=&quot;p-col-6&quot;&gt;
							&lt;div class=&quot;box&quot;&gt;6&lt;/div&gt;
						&lt;/div&gt;
						&lt;div class=&quot;p-col-12&quot;&gt;
							&lt;div class=&quot;box&quot;&gt;12&lt;/div&gt;
						&lt;/div&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-4&quot;&gt;
					&lt;div class=&quot;box box-stretched&quot;&gt;4&lt;/div&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Panels&lt;/h3&gt;
			&lt;div class=&quot;p-grid&quot;&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;Panel header=&quot;Godfather&quot;&gt;
						The story begins as Don Vito Corleone, the head of a New York Mafia family, oversees his daughter's wedding.
						His beloved son Michael has just come home from the war, but does not intend to become part of his father's business.
						Through Michael's life the nature of the family business becomes clear. The business of the family is just like the head of the family,
						kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family.
					&lt;/Panel&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;Panel header=&quot;Godfather&quot;&gt;
						The story begins as Don Vito Corleone, the head of a New York Mafia family, oversees his daughter's wedding.
						His beloved son Michael has just come home from the war, but does not intend to become part of his father's business.
						Through Michael's life the nature of the family business becomes clear. The business of the family is just like the head of the family,
						kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family.
					&lt;/Panel&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col&quot;&gt;
					&lt;Panel header=&quot;Godfather&quot;&gt;
						The story begins as Don Vito Corleone, the head of a New York Mafia family, oversees his daughter's wedding.
						His beloved son Michael has just come home from the war, but does not intend to become part of his father's business.
						Through Michael's life the nature of the family business becomes clear. The business of the family is just like the head of the family,
						kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family.
					&lt;/Panel&gt;
				&lt;/div&gt;
			&lt;/div&gt;

			&lt;h3&gt;Sample Layout&lt;/h3&gt;
			&lt;div class=&quot;p-grid sample-layout&quot;&gt;
				&lt;div class=&quot;p-col-12 p-md-2&quot;&gt;
					Menu
				&lt;/div&gt;
				&lt;div class=&quot;p-col-12 p-md-10 p-col-nogutter&quot;&gt;
					&lt;div class=&quot;p-col-12 p-col-nogutter&quot;&gt;
						Top Bar
					&lt;/div&gt;
					&lt;div class=&quot;p-col-12&quot;&gt;
						&lt;div class=&quot;p-grid&quot;&gt;
							&lt;div class=&quot;p-col-12 p-md-4&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet, orci nec
								dictum convallis, ligula mauris vestibulum turpis, nec varius tortor quam at diam. Nullam a viverra nibh.
								In tincidunt tempor lectus quis vulputate. Pellentesque nec dui aliquam, lobortis est in, lobortis ante&lt;/div&gt;
							&lt;div class=&quot;p-col-12 p-md-4&quot;&gt;Maecenas vel nisi aliquet, vulputate tortor id, laoreet massa. Maecenas mattis
								tristique bibendum. Suspendisse vel mi dictum, vestibulum lacus quis, pulvinar quam. Proin vulputate, nibh
								at finibus varius, leo eros lacinia elit, nec blandit odio tellus a justo. Donec nec ex auctor, tristique
								nulla nec, rutrum sapien.&lt;/div&gt;
							&lt;div class=&quot;p-col-12 p-md-4&quot;&gt;Proin efficitur in leo eget ornare. Nam vestibulum neque sed velit sagittis
								sodales. Sed scelerisque hendrerit magna a hendrerit. Cras tempor sem at justo pharetra convallis.
								Curabitur vel sodales purus. Vestibulum interdum facilisis nulla imperdiet suscipit. Quisque lectus felis,
								condimentum eget hendrerit sit amet.&lt;/div&gt;

							&lt;div class=&quot;p-col-6 p-md-3&quot;&gt;&lt;img alt=&quot;Galleria 1&quot; src=&quot;/demo/images/nature/nature1.jpg&quot; style=&quot;width: 100%&quot; /&gt;&lt;/div&gt;
							&lt;div class=&quot;p-col-6 p-md-3&quot;&gt;&lt;img alt=&quot;Galleria 2&quot; src=&quot;/demo/images/nature/nature2.jpg&quot; style=&quot;width: 100%&quot; /&gt;&lt;/div&gt;
							&lt;div class=&quot;p-col-6 p-md-3&quot;&gt;&lt;img alt=&quot;Galleria 3&quot; src=&quot;/demo/images/nature/nature3.jpg&quot; style=&quot;width: 100%&quot; /&gt;&lt;/div&gt;
							&lt;div class=&quot;p-col-6 p-md-3&quot;&gt;&lt;img alt=&quot;Galleria 4&quot; src=&quot;/demo/images/nature/nature4.jpg&quot; style=&quot;width: 100%&quot; /&gt;&lt;/div&gt;

							&lt;div class=&quot;p-col-12 p-md-6&quot;&gt;Phasellus faucibus purus volutpat mauris lacinia sodales. Ut sit amet sapien
								facilisis, commodo dui non, fringilla tellus. Quisque tempus facilisis nisi sodales finibus. Pellentesque
								neque orci, ullamcorper vitae ligula quis, dignissim euismod augue.&lt;/div&gt;
							&lt;div class=&quot;p-col-12 p-md-6&quot;&gt;Fusce ullamcorper congue massa, eget ullamcorper nunc lobortis egestas. Lorem
								ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultrices dui eget dolor feugiat dapibus. Aliquam
								pretium leo et egestas luctus. Nunc facilisis gravida tellus.&lt;/div&gt;
						&lt;/div&gt;
					&lt;/div&gt;
				&lt;/div&gt;
				&lt;div class=&quot;p-col-12&quot;&gt;
					Footer
				&lt;/div&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/template&gt;
</template>
</CodeHighlight>

<CodeHighlight lang="javascript">
export default {
	data() {
		return {
			columns: [0, 1, 2, 3, 4, 5]
		}
	},
	methods: {
		addColumn() {
			this.columns = [...this.columns, this.columns.length];
		},
		removeColumn() {
			this.columns.pop();
		}
	}
}
</CodeHighlight>

<CodeHighlight lang="css">
.flexgrid-demo {
	.box,
	.sample-layout > div {
		background-color: #f1f1f1;
		text-align: center;
		padding-top: 1em;
		padding-bottom: 1em;
		border-radius: 4px;
	}

	.box-stretched {
		height: 100%;
	}

	.sample-layout {
		margin: 0;
	}

	.sample-layout > div {
		border: 1px solid #ffffff;
	}

	.vertical-container {
		margin: 0;
		height: 200px;
		background: #c0c0c0;
		border-radius: 4px;
	}

	.nested-grid .p-col-4 {
		padding-bottom: 1em;
	}

	.dynamic-box-enter-active, .dynamic-box-leave-active {
		transition: all .5s;
	}

	.dynamic-box-enter, .dynamic-box-leave-to {
		opacity: 0;
	}

	.dynamic-box-enter, .dynamic-box-leave-to {
		transform: translateX(30px);
	}
}
</CodeHighlight>
			</TabPanel>
		</TabView>
	</div>
</template>