<template>
    Az aktuális egyenleged:
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-striped w-auto">
                        <thead>
                        <tr>
                            <th>Forint</th>
                            <th>Euró</th>
                            <th>Dollár</th>
                            <th>Török líra</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ balance[0] }}</td>
                            <td>{{ balance[1] }}</td>
                            <td>{{ balance[2] }}</td>
                            <td>{{ balance[3] }}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <hr>
</template>

<script>


export default {
    name: "DashboardSum",

    props: ['my_expenses', 'my_incomes'],
    data() {
        return {
            sum: 0,
            expenses: this.my_expenses,
            incomes: this.my_incomes,
        };
    },

    methods: {},
    computed: {
        balance() {

            let balancehuf = 0;
            for (let i = 0; i < this.expenses.length; i++) {
                if (this.expenses[i].currency === 'Ft') {
                    balancehuf -= this.expenses[i].amount;
                }
            }
            for (let i = 0; i < this.incomes.length; i++) {
                if (this.incomes[i].currency === 'Ft') {
                    balancehuf += this.incomes[i].amount;
                }
            }

            let balanceeur = 0;
            for (let i = 0; i < this.expenses.length; i++) {
                if (this.expenses[i].currency === 'EUR') {
                    balanceeur -= this.expenses[i].amount;
                }
            }
            for (let i = 0; i < this.incomes.length; i++) {
                if (this.incomes[i].currency === 'EUR') {
                    balanceeur += this.incomes[i].amount;
                }
            }

            let balanceusd = 0;
            for (let i = 0; i < this.expenses.length; i++) {
                if (this.expenses[i].currency === 'USD') {
                    balanceusd -= this.expenses[i].amount;
                }
            }
            for (let i = 0; i < this.incomes.length; i++) {
                if (this.incomes[i].currency === 'USD') {
                    balanceusd += this.incomes[i].amount;
                }
            }

            let balancetry = 0;
            for (let i = 0; i < this.expenses.length; i++) {
                if (this.expenses[i].currency === 'TRY') {
                    balancetry -= this.expenses[i].amount;
                }
            }
            for (let i = 0; i < this.incomes.length; i++) {
                if (this.incomes[i].currency === 'TRY') {
                    balancetry += this.incomes[i].amount;
                }
            }
            return [balancehuf, balanceeur, balanceusd, balancetry];
        },

    },

    mounted() {
        this.balance;
    },
    beforeMount() {

    }
}
</script>

<style scoped>

</style>
