<template>
	<div class="c-flex c-flex-col c-gap-2">
		<div class="">
			<label class="c-block c-font-bold">Button Label <span class="c-text-red-500" v-if="config.required">*</span></label>
			<text-input type="text" v-model="button_label" class="c-w-2/3" />
		</div>

		<div class="">
			<label class="c-block c-font-bold">Event Title <span class="c-text-red-500" v-if="config.required">*</span></label>
			<text-input type="text" v-model="title" class="c-w-2/3" />
		</div>

		<div class="c-flex c-items-center c-gap-2">
			<div class="c-w-1/2">
				<label class="c-block c-font-bold">Start Date <span class="c-text-red-500" v-if="config.required">*</span></label>
				<text-input type="date" v-model="startDate" class="c-w-full" />
			</div>
			<div class="c-w-1/2">
				<label class="c-block c-font-bold">Start Time <span class="c-text-red-500" v-if="config.required">*</span></label>
				<text-input type="time" v-model="startTime" class="c-w-full" />
			</div>
		</div>

		<div class="c-flex c-items-center c-gap-2">
			<div class="c-w-1/2">
				<label class="c-block c-font-bold">End Date <span class="c-text-red-500" v-if="config.required">*</span></label>
				<text-input type="date" v-model="endDate" class="c-w-full" />
			</div>
			<div class="c-w-1/2">
				<label class="c-block c-font-bold">End Time <span class="c-text-red-500" v-if="config.required">*</span></label>
				<text-input type="time" v-model="endTime" class="c-w-full" />
			</div>
		</div>

		<div class="">
			<label class="c-block c-font-bold">Location</label>
			<text-input type="text" v-model="location" class="c-w-full" />
		</div>

		<div class="">
			<label class="c-block c-font-bold">Description</label>
			<textarea-input v-model="description" />
		</div>
	</div>
</template>

<script>
export default {
	mixins: [Fieldtype],

	data() {
		return {
			button_label: '',
			title: '',
			startDate: null,
			startTime: '',
			endDate: null,
			endTime: '',
			location: '',
			description: '',
			showError: false,
		}
	},

	computed: {
		isValid() {
			if (!this.config.required) return true;
			return this.buttonLabel &&
				this.title &&
				this.startDate &&
				this.startTime &&
				this.endDate &&
				this.endTime;
		}
	},

	watch: {
		button_label() { this.updateValue() },
		title() { this.updateValue() },
		startDate() { this.updateValue() },
		startTime() { this.updateValue() },
		endDate() { this.updateValue() },
		endTime() { this.updateValue() },
		description() { this.updateValue() },
		location() { this.updateValue() },
	},

	methods: {
		updateValue() {
			this.showError = this.config.required && !this.isValid;

			if (this.isValid) {
				this.update({
					button_label: this.button_label,
					title: this.title,
					startDate: this.startDate,
					startTime: this.startTime,
					endDate: this.endDate,
					endTime: this.endTime,
					location: this.location,
					description: this.description
				});
			} else {
				this.update(null);
			}
		}
	},

	mounted() {
		if (this.value) {
			this.button_label = this.value.button_label;
			this.title = this.value.title;
			this.startDate = this.value.startDate;
			this.startTime = this.value.startTime;
			this.endDate = this.value.endDate;
			this.endTime = this.value.endTime;
			this.description = this.value.description;
			this.location = this.value.location;
		}
	}
}
</script>
