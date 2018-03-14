<template>
	<div id="vilbur-skills">

		<div class="tabs is-centered is-fixed-top">
			<ul v-for="category in categories" @click="filterCatergory(category.title)">
			  <li><a>{{ category.title }}</a></li>
			</ul>
		</div>

		<div v-for="(skill, index) in skills" class="hero category-filter" :class="{isFiltered: isFiltered !== 'all' && isFiltered !== skill.category}" >

			<skills-header>
					<span slot="logo">
						<img class="img-center-vcerticaly" v-bind:src="skill.image">
					</span>
					<span class="item-title" >{{ skill.title }}</span>
			</skills-header>

			<div class="columns">
				<div class="column has-text-centered
							is-11-mobile is-offset-1-mobile has-text-left-mobile
							is-3-tablet
							is-2-desktop is-offset-1-desktop
							is-offset-2-widescreen"
				>
				</div>

				<div class="skill-details column border-OFF-b">
					<div v-for="skill_detail in skill.skill_details">
						<skills-detail>
							<span slot="title">{{skill_detail.title}}:</span>
							{{skill_detail.summary }}
						</skills-detail>
					</div>
				</div>
			</div>

		</div>

	</div>
</template>


<script>
	import skillsHeader from '../components/skills-header';
	import skillsDetail from '../components/skills-detail';

	export default {
		props: ['category'],
		data(){
			return {
				categories:	[],
				//categories:	[{title:'all'}],
				skills:	[],
				isFiltered:	'all',
			};
		},
		created(){
			axios.get('/db/category-skills').then( response => this.categories = [].concat.apply([{title:'all'}], response.data) );
			axios.get('/db/skills').then( response => this.skills = response.data );
		},
		mounted(){

		},
		methods:{
			filterCatergory(category){
				this.isFiltered = category;
			}
		},
		components:{
			'skills-header':skillsHeader,
			'skills-detail':skillsDetail,
		}
	};
</script>
