<template>
	<div class="content-section documentation">
		<TabView>
			<TabPanel header="Documentation">
				<h3>Import</h3>
<CodeHighlight lang="javascript">
import {TabView, TabPanel} from 'primevue/tabview';
</CodeHighlight>

				<h3>Getting Started</h3>
				<p>Tabview element consists of one or more TabPanel elements. Header of the tab is defined using header attribute.</p>
<CodeHighlight>
&lt;TabView&gt;
	&lt;TabPanel header=&quot;Header I&quot;&gt;
		Content I
	&lt;/TabPanel&gt;
	&lt;TabPanel header=&quot;Header II&quot;&gt;
		Content II
	&lt;/TabPanel&gt;
	&lt;TabPanel header=&quot;Header III&quot;&gt;
		Content III
	&lt;/TabPanel&gt;
&lt;/TabView&gt;
</CodeHighlight>

				<h3>Programmatic Control</h3>
				<p>Tabs can be controlled programmatically using active property that defines the active tab.</p>
<CodeHighlight>
&lt;div&gt;
	&lt;Button icon=&quot;pi pi-chevron-left&quot; @click=&quot;prev&quot;/&gt;
	&lt;Button icon=&quot;pi pi-chevron-right&quot; @click=&quot;next&quot;/&gt;
&lt;/div&gt;

&lt;TabView&gt;
	&lt;TabPanel header=&quot;Header I&quot; :active=&quot;activeIndex === 0&quot;&gt;
		Content I
	&lt;/TabPanel&gt;
	&lt;TabPanel header=&quot;Header II&quot; :active=&quot;activeIndex === 1&quot;&gt;
		Content II
	&lt;/TabPanel&gt;
	&lt;TabPanel header=&quot;Header III&quot; :active=&quot;activeIndex === 2&quot;&gt;
		Content III
	&lt;/TabPanel&gt;
&lt;/TabView&gt;
</CodeHighlight>

<CodeHighlight lang="js">
export default {
	data() {
		return {
			activeIndex: 0
		}
	},
	methods: {
		next() {
			this.activeIndex = this.activeIndex === 2 ? 0 : this.activeIndex + 1;
		},
		prev() {
			this.activeIndex = this.activeIndex === 0 ? 2 : this.activeIndex - 1;
		}
	}
}
</CodeHighlight>

				<h3>Disabled</h3>
				<p>A tab can be disabled to prevent the content to be displayed by setting the disabled property on a panel.</p>
<CodeHighlight>
&lt;TabView&gt;
	&lt;TabPanel header=&quot;Header I&quot;&gt;
		Content I
	&lt;/TabPanel&gt;
	&lt;TabPanel header=&quot;Header II&quot;&gt;
		Content II
	&lt;/TabPanel&gt;
	&lt;TabPanel header=&quot;Header III&quot; :disabled=&quot;true&quot;&gt;
		Content III
	&lt;/TabPanel&gt;
&lt;/TabView&gt;
</CodeHighlight>

				<h3>Header Template</h3>
				<p>Header of a tab supports templating to place custom html content instead of strings as well.</p>
<CodeHighlight>
&lt;TabView class=&quot;tabview-custom&quot;&gt;
	&lt;TabPanel&gt;
		&lt;template slot=&quot;header&quot;&gt;
			&lt;i class=&quot;pi pi-calendar&quot;&gt;&lt;/i&gt;
			&lt;span&gt;Header I&lt;/span&gt;
		&lt;/template&gt;
		Content I
	&lt;/TabPanel&gt;
	&lt;TabPanel&gt;
		&lt;template slot=&quot;header&quot;&gt;
			&lt;span&gt;Header II&lt;/span&gt;
			&lt;i class=&quot;pi pi-user&quot;&gt;&lt;/i&gt;
		&lt;/template&gt;
		Content II
	&lt;/TabPanel&gt;
&lt;/TabView&gt;
</CodeHighlight>

				<h3>Properties For TabPanel</h3>
				<div class="doc-tablewrapper">
					<table class="doc-table">
						<thead>
						<tr>
							<th>Name</th>
							<th>Type</th>
							<th>Default</th>
							<th>Description</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>header</td>
							<td>string</td>
							<td>null</td>
							<td>Orientation of tab headers.</td>
						</tr>
						<tr>
							<td>active</td>
							<td>boolean</td>
							<td>null</td>
							<td>Visibility of the content.</td>
						</tr>
						<tr>
							<td>disabled</td>
							<td>boolean</td>
							<td>null</td>
							<td>Whether the tab is disabled.</td>
						</tr>
						</tbody>
					</table>
				</div>

				<h3>Events</h3>
				<div class="doc-tablewrapper">
					<table class="doc-table">
						<thead>
						<tr>
							<th>Name</th>
							<th>Parameters</th>
							<th>Description</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>tabchange</td>
							<td>event.originalEvent: Browser event  <br/>
								event.tab: Selected tab
							</td>
							<td>Callback to invoke when an active tab is changed.</td>
						</tr>
						</tbody>
					</table>
				</div>

				<h3>Styling</h3>
				<p>Following is the list of structural style classes, for theming classes visit <router-link to="/theming">theming</router-link> page.</p>
				<div class="doc-tablewrapper">
					<table class="doc-table">
						<thead>
						<tr>
							<th>Name</th>
							<th>Element</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td>p-tabview</td>
							<td>Container element.</td>
						</tr>
						<tr>
							<td>p-tabview-nav</td>
							<td>Container of headers.</td>
						</tr>
						<tr>
							<td>p-tabview-selected</td>
							<td>Selected tab header.</td>
						</tr>
						<tr>
							<td>p-tabview-panels</td>
							<td>Container panels.</td>
						</tr>
						<tr>
							<td>p-tabview-panel</td>
							<td>Content of a tab.</td>
						</tr>
						</tbody>
					</table>
				</div>

				<h3>Dependencies</h3>
				<p>None.</p>
			</TabPanel>

			<TabPanel header="Source">
				<a href="https://github.com/primefaces/primevue/tree/master/src/views/tabview" class="btn-viewsource" target="_blank" rel="noopener noreferrer">
					<span>View on GitHub</span>
				</a>
<CodeHighlight>
<template v-pre>
&lt;template&gt;
	&lt;div&gt;
		&lt;div class=&quot;content-section introduction&quot;&gt;
			&lt;div class=&quot;feature-intro&quot;&gt;
				&lt;h1&gt;TabView&lt;/h1&gt;
				&lt;p&gt;TabView is a container component to group content with tabs.&lt;/p&gt;
			&lt;/div&gt;
		&lt;/div&gt;

		&lt;div class=&quot;content-section implementation&quot;&gt;
			&lt;h3 class=&quot;first&quot;&gt;Default&lt;/h3&gt;
			&lt;TabView&gt;
				&lt;TabPanel header=&quot;Godfather I&quot;&gt;
					The story begins as Don Vito Corleone, the head of a New York Mafia family, overseeshis daughter's wedding. His beloved son ichael has just come home from the war,
					but does not intend to become part of his father's business. Through Michael's life the nature of the family business becomes clear. The business of the family is
					just like the head of the family, kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family.
				&lt;/TabPanel&gt;
				&lt;TabPanel header=&quot;Godfather II&quot;&gt;
					Francis Ford Coppola's legendary continuation and sequel to his landmark 1972 film, TheGodfather parallels the young Vito Corleone's rise with his son Michael's spiritual fall,
					deepening The Godfather's depiction of the dark side of the American dream. In the early 1900s, the child Vito flees his Sicilian village for America after the local Mafia kills
					his family. Vito struggles to make a living, legally or illegally, for his wife and growing brood in Little Italy.
				&lt;/TabPanel&gt;
				&lt;TabPanel header=&quot;Godfather III&quot;&gt;
					The Godfather Part III is set in 1979 and 1980. Michael has moved back to New York and taken great strides to remove the family from crime. He turns over his New York criminal
					interests to longtime enforcer Joey Zasa. He uses his wealth in an attempt to rehabilitate his reputation through numerous philanthropic acts, administered by a foundation named after his father.
					A decade earlier, he gave custody of his two children to Kay, who has since remarried.
				&lt;/TabPanel&gt;
			&lt;/TabView&gt;

			&lt;h3&gt;Programmatic&lt;/h3&gt;
			&lt;div style=&quot;padding: .5em 0&quot;&gt;
				&lt;Button icon=&quot;pi pi-chevron-left&quot; @click=&quot;prev&quot; class=&quot;p-button-secondary&quot; /&gt;
				&lt;Button icon=&quot;pi pi-chevron-right&quot; @click=&quot;next&quot; style=&quot;margin-left: .5em&quot; class=&quot;p-button-secondary&quot;/&gt;
			&lt;/div&gt;

			&lt;TabView&gt;
				&lt;TabPanel header=&quot;Godfather I&quot; :active=&quot;activeIndex === 0&quot;&gt;
					The story begins as Don Vito Corleone, the head of a New York Mafia family, overseeshis daughter's wedding. His beloved son ichael has just come home from the war,
					but does not intend to become part of his father's business. Through Michael's life the nature of the family business becomes clear. The business of the family is
					just like the head of the family, kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family.
				&lt;/TabPanel&gt;
				&lt;TabPanel header=&quot;Godfather II&quot; :active=&quot;activeIndex === 1&quot;&gt;
					Francis Ford Coppola's legendary continuation and sequel to his landmark 1972 film, TheGodfather parallels the young Vito Corleone's rise with his son Michael's spiritual fall,
					deepening The Godfather's depiction of the dark side of the American dream. In the early 1900s, the child Vito flees his Sicilian village for America after the local Mafia kills
					his family. Vito struggles to make a living, legally or illegally, for his wife and growing brood in Little Italy.
				&lt;/TabPanel&gt;
				&lt;TabPanel header=&quot;Godfather III&quot; :active=&quot;activeIndex === 2&quot;&gt;
					The Godfather Part III is set in 1979 and 1980. Michael has moved back to New York and taken great strides to remove the family from crime. He turns over his New York criminal
					interests to longtime enforcer Joey Zasa. He uses his wealth in an attempt to rehabilitate his reputation through numerous philanthropic acts, administered by a foundation named after his father.
					A decade earlier, he gave custody of his two children to Kay, who has since remarried.
				&lt;/TabPanel&gt;
			&lt;/TabView&gt;

			&lt;h3&gt;Disabled&lt;/h3&gt;
			&lt;TabView&gt;
				&lt;TabPanel header=&quot;Godfather I&quot;&gt;
					The story begins as Don Vito Corleone, the head of a New York Mafia family, overseeshis daughter's wedding. His beloved son ichael has just come home from the war,
					but does not intend to become part of his father's business. Through Michael's life the nature of the family business becomes clear. The business of the family is
					just like the head of the family, kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family.
				&lt;/TabPanel&gt;
				&lt;TabPanel header=&quot;Godfather II&quot;&gt;
					Francis Ford Coppola's legendary continuation and sequel to his landmark 1972 film, TheGodfather parallels the young Vito Corleone's rise with his son Michael's spiritual fall,
					deepening The Godfather's depiction of the dark side of the American dream. In the early 1900s, the child Vito flees his Sicilian village for America after the local Mafia kills
					his family. Vito struggles to make a living, legally or illegally, for his wife and growing brood in Little Italy.
				&lt;/TabPanel&gt;
				&lt;TabPanel header=&quot;Godfather III&quot;&gt;
					The Godfather Part III is set in 1979 and 1980. Michael has moved back to New York and taken great strides to remove the family from crime. He turns over his New York criminal
					interests to longtime enforcer Joey Zasa. He uses his wealth in an attempt to rehabilitate his reputation through numerous philanthropic acts, administered by a foundation named after his father.
					A decade earlier, he gave custody of his two children to Kay, who has since remarried.
				&lt;/TabPanel&gt;
				&lt;TabPanel header=&quot;Godfather IV&quot; :disabled=&quot;true&quot;&gt;&lt;/TabPanel&gt;
			&lt;/TabView&gt;

			&lt;h3&gt;Custom Headers&lt;/h3&gt;
			&lt;TabView class=&quot;tabview-custom&quot;&gt;
				&lt;TabPanel&gt;
					&lt;template slot=&quot;header&quot;&gt;
						&lt;i class=&quot;pi pi-calendar&quot;&gt;&lt;/i&gt;
						&lt;span&gt;Godfather I&lt;/span&gt;
					&lt;/template&gt;
					The story begins as Don Vito Corleone, the head of a New York Mafia family, overseeshis daughter's wedding. His beloved son ichael has just come home from the war,
					but does not intend to become part of his father's business. Through Michael's life the nature of the family business becomes clear. The business of the family is
					just like the head of the family, kind and benevolent to those who give respect, but given to ruthless violence whenever anything stands against the good of the family.
				&lt;/TabPanel&gt;
				&lt;TabPanel&gt;
					&lt;template slot=&quot;header&quot;&gt;
						&lt;span&gt;Godfather II&lt;/span&gt;
						&lt;i class=&quot;pi pi-user&quot;&gt;&lt;/i&gt;
					&lt;/template&gt;
					Francis Ford Coppola's legendary continuation and sequel to his landmark 1972 film, TheGodfather parallels the young Vito Corleone's rise with his son Michael's spiritual fall,
					deepening The Godfather's depiction of the dark side of the American dream. In the early 1900s, the child Vito flees his Sicilian village for America after the local Mafia kills
					his family. Vito struggles to make a living, legally or illegally, for his wife and growing brood in Little Italy.
				&lt;/TabPanel&gt;
				&lt;TabPanel&gt;
					&lt;template slot=&quot;header&quot;&gt;
						&lt;i class=&quot;pi pi-search&quot;&gt;&lt;/i&gt;
						&lt;span&gt;Godfather III&lt;/span&gt;
						&lt;i class=&quot;pi pi-cog&quot;&gt;&lt;/i&gt;
					&lt;/template&gt;
					The Godfather Part III is set in 1979 and 1980. Michael has moved back to New York and taken great strides to remove the family from crime. He turns over his New York criminal
					interests to longtime enforcer Joey Zasa. He uses his wealth in an attempt to rehabilitate his reputation through numerous philanthropic acts, administered by a foundation named after his father.
					A decade earlier, he gave custody of his two children to Kay, who has since remarried.
				&lt;/TabPanel&gt;
			&lt;/TabView&gt;
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/template&gt;
</template>
</CodeHighlight>

<CodeHighlight lang="javascript">
export default {
	data() {
		return {
			activeIndex: 0
		}
	},
	methods: {
		next() {
			this.activeIndex = this.activeIndex === 2 ? 0 : this.activeIndex + 1;
		},
		prev() {
			this.activeIndex = this.activeIndex === 0 ? 2 : this.activeIndex - 1;
		}
	}
}
</CodeHighlight>

<CodeHighlight lang="css">
.tabview-custom {
	i, span {
		vertical-align: middle;
	}

	span {
		margin: 0 .5em;
	}
}
</CodeHighlight>
			</TabPanel>
		</TabView>
	</div>
</template>