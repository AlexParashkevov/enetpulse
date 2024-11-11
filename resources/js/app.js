import './bootstrap';
import { createApp } from 'vue'
import TournamentTable from './components/TournamentTable.vue';
import vuetify from "./vuetify";

const app = createApp({})

app.use(vuetify);
app.component('tournament-table', TournamentTable);

app.mount('#app')
