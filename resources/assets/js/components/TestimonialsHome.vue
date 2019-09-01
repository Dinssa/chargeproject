<template>
	<div>
		<p>{{displayed}}</p>
		<div class="t-lower-third">
			<p>{{fullname}}</p>
			<p>{{jobTitle}} at {{company}}</p>
		</div>

		<div class="t-avatar-outer-wrapper">
			<div @click="changeText('firstTestimonial')" class="t-avatar-wrapper">
				<img v-if="who == 'first'" class="rounded-circle" :src='pic' alt="avatar of testimonial">
				<img src="/img/t_empty.png" alt="testimonial placehoder">
			</div>

			<div @click="changeText('secondTestimonial')" class="t-avatar-wrapper">
				<img v-if="who == 'second'" class="rounded-circle" :src='pic' alt="avatar of testimonial">
				<img src="/img/t_empty.png" alt="testimonial placehoder">
			</div>

		<div @click="changeText('thirdTestimonial')" class="t-avatar-wrapper">
				<img v-if="who == 'third'" class="rounded-circle" :src='pic' alt="avatar of testimonial">
				<img src="/img/t_empty.png" alt="testimonial placehoder">
			</div>

		</div>
		

	</div>
</template>

<script>

export default {
	data () {
		return {
			who:'',
			displayed:'',
			fullname:'',
			jobTitle:'',
			company:'',
			pic:'',
			thirdTestimonial: { 
				fullname: 'Leanne Claxton', 
				jobTitle: 'Founder', 
				company:'Leanne Claxton', 
				text:'Thank FavourUp for your help and support to establish my company and designs in the highly competitive fashion market. I am very appreciative of the improvements FavourUp made to my website with the #Endorse feature. The #Endorse featurehas resulted in a substantial increase in the level of my followers. This will no doubt help to promote my designs. I have seen an increase in sales latterly and am hopeful of securing more sales via your website. I have worked with other website platforms in the past but can absolutely state that the quality and promptness of your communications far surpass anything I have experiences previously.',
				pic: '/img/leanneprofile.jpg',
			},
				
			secondTestimonial: { 
				fullname: 'Zoe Partridge', 
				jobTitle: 'Founder', 
				company:'WearTheWalk', 
				text:'I started working with Favour Up in June of this year, and the impact it has had on my business has been phenomenal. The simple truth is that people don’t follow brands, they follow people, and so having an area where customers can shop the exact look their favourite influencer wore is invaluable for converting more customers. It has also helped identify who are customers respond to, and how successful the influencers we work with are. It means we can now make an informed decision on which influencers to work with based on engagement and click throughs on products.',
				pic: '/img/zoeprofile.jpg',
			},
				
			firstTestimonial: { 
				fullname: 'Aditya Kasana', 
				jobTitle: 'Founder', 
				company:'Josh Fano', 
				text:'First I was sceptical about using a new marketing app being integrated with my e-commerce website but Favourup changed my perception. From the day 1, I’ve seen tremendous response in sales because of favourup in-house technology that allowed my influencer posts to be on the home page of my website! I can’t wait to see what’s next up thier sleeve! All the best to the team!',
				pic:'/img/adiprofile.jpg'
			},
		}
	},
	methods: {
		changeText: function(testimonial) {
			if(testimonial == 'firstTestimonial'){
					this.displayed = this.firstTestimonial.text
					this.fullname = this.firstTestimonial.fullname
					this.jobTitle = this.firstTestimonial.jobTitle
					this.company = this.firstTestimonial.company
					this.pic = this.firstTestimonial.pic
					this.who = 'first'

			}else if(testimonial == 'secondTestimonial'){
					this.displayed = this.secondTestimonial.text
					this.fullname = this.secondTestimonial.fullname
					this.jobTitle = this.secondTestimonial.jobTitle
					this.company = this.secondTestimonial.company
					this.pic = this.secondTestimonial.pic
					this.who = 'second'
			}else {
				this.displayed = this.thirdTestimonial.text
				this.fullname = this.thirdTestimonial.fullname
				this.jobTitle = this.thirdTestimonial.jobTitle
				this.company = this.thirdTestimonial.company
				this.pic = this.thirdTestimonial.pic
				this.who = 'third'
			}
		},
	},
	created: function () {
	    this.displayed = this.firstTestimonial.text
		this.fullname = this.firstTestimonial.fullname
		this.jobTitle = this.firstTestimonial.jobTitle
		this.company = this.firstTestimonial.company
		this.pic = this.firstTestimonial.pic
		this.who = 'first'
  	}
}
</script>