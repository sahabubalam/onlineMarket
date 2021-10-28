require('./bootstrap');
import { createApp } from 'vue'

import example from './components/ExampleComponent.vue';
import image1 from './components/imagepreview/FeatureImage.vue';
import image2 from './components/imagepreview/FirstImage.vue';
import image3 from './components/imagepreview/SecondImage.vue';
import catdropdown from './components/CategoryDropdown.vue';
import adddropdown from './components/AddressDropdown.vue';

const app = createApp({});
// registers our HelloWorld component globally
app.component('example-component', example);
app.component('image-preview', image1);
app.component('first-image', image2);
app.component('second-image', image3);
app.component('category-dropdown', catdropdown);
app.component('address-dropdown', adddropdown);

// mount the app to the DOM
app.mount('#app');

 