<template>
    <v-container>
      <h3>Tournaments</h3>
      <v-data-table
        :headers="headers"
        :items="tableData"
        item-value="id"
        class="elevation-1"
      >
        <template v-slot:item="{ item }">
          <tr>
            <td>{{ item.tournamentName }}</td>
            <td>{{ item.seasonYear }}</td>
            <td>{{ item.match }}</td>
            <td>{{ item.teams }}</td>
            <td>{{ item.results }}</td>
          </tr>
        </template>
      </v-data-table>
    </v-container>
  </template>
  
<script>
    import axios from 'axios';


    export default {
    data() {
        return {
        tournaments: [],
        headers: [
            { title: 'Tournament', key: 'tournamentName', align: 'start', sortable: false },
            { title: 'Season', key: 'seasonYear', align: 'start' },
            { title: 'Match', key: 'match', align: 'start' },
            { title: 'Teams', key: 'teams', align: 'start' },
            { title: 'Results', key: 'results', align: 'start' },
        ],
        };
    },
    computed: {
        tableData() {
        const flattenedData = [];
        this.tournaments.forEach((tournament) => {
            tournament.seasons.forEach((season) => {
            season.matches.forEach((match) => {
                flattenedData.push({
                id: `${tournament.id}-${season.id}-${match.id}`,
                tournamentName: tournament.name,
                seasonYear: season.year,
                match: `${match.team1.name} vs ${match.team2.name}`,
                teams: `${match.team1.name} vs ${match.team2.name}`,
                results: match.results
                    .map((result) => `${result.team.name}: ${result.score}`)
                    .join(', '),
                });
            });
            });
        });
        return flattenedData;
        },
    },
    methods: {
        fetchTournaments() {
        axios.get('/api/tournaments')
            .then(response => {
            this.tournaments = response.data;
            console.log('Fetched Tournaments:', this.tournaments);
            })
            .catch(error => {
            console.error('Error fetching tournaments:', error);
            });
        },
    },
        mounted() {
            this.fetchTournaments();
            setInterval(this.fetchTournaments, 60000);
        },
    };
</script>