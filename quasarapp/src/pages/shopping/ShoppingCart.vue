<template>
    <q-page class="q-pa-sm">

        <q-stepper v-model="step" ref="stepper" alternative-labels color="primary" animated>
            <q-step :name="1" title="Carrito" icon="shopping_cart" :done="step > 1">

                <q-table flat bordered title="Productos seleccionados" :rows="rows" :columns="columns" row-key="name">

                    <template v-slot:header="props">
                        <q-tr :props="props">
                            <q-th auto-width />
                            <q-th v-for="col in props.cols" :key="col.name" :props="props">
                                {{ col.label }}
                            </q-th>
                        </q-tr>
                    </template>

                    <template v-slot:body="props">
                        <q-tr :props="props">
                            <q-td auto-width>
                                <q-btn size="sm" color="accent" round dense @click="props.expand = !props.expand"
                                    :icon="props.expand ? 'remove' : 'add'" />
                            </q-td>
                            <q-td v-for="col in props.cols" :key="col.name" :props="props">
                                {{ col.value }}
                            </q-td>
                        </q-tr>
                        <q-tr v-show="props.expand" :props="props">
                            <q-td colspan="100%">
                                <div class="text-left">This is expand slot for row above: {{ props.row.name }}.</div>
                            </q-td>
                        </q-tr>
                    </template>

                </q-table>

                <p>TOTAL: {{totalAmount}}</p>
            </q-step>

            <q-step :name="2" title="Pago" icon="money" :done="step > 2">
                An ad group contains one or more ads which target a shared set of keywords.
            </q-step>

            <q-step :name="3" title="Descargar" icon="download">
                Try out different ad text to see what brings in the most customers, and learn how to
                enhance your ads using features like ad extensions. If you run into any problems with
                your ads, find out how to tell if they're running and how to resolve approval issues.
            </q-step>


            <template v-slot:navigation>
                <q-separator />

                <q-stepper-navigation class="q-mt-md">
                    <div class="row justify-center">
                        <q-btn @click="$refs.stepper.next()" color="primary" :label="step === 3 ? 'Finish' : 'Continue'" />
                        <q-btn v-if="step > 1" flat color="primary" @click="$refs.stepper.previous()" label="Back"
                            class="q-ml-sm" />
                    </div>
                </q-stepper-navigation>
            </template>
        </q-stepper>
    </q-page>
</template>

<script>
import { ref, computed } from 'vue';
import shoppingStore from "stores/shopping";

export default {

    setup() {

        const shopping = ref(shoppingStore());


        const totalAmount = computed(()=>{
            return shopping.value.totalAmount;
        })

        const columns = [
            { name: 'name', required: true, label: 'Descripcion', align: 'left', field: row => row.name, format: val => `${val}`, sortable: true },
            { name: 'cant', align: 'center', label: 'Cantidad', field: 'cant', sortable: true },
            { name: 'price', label: 'Precio', field: 'price', sortable: true },

        ];
        const rows = shopping.value.products;
        return {
            step: ref(1),
            columns,
            rows,
            totalAmount
        }
    }
}
</script>
