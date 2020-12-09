<template>
    <div class="container-fluid">
        <div class="card">
            <div class="row mb-0">
                <div class="col-5">
                    <!-- Filter -->
                    <b-form-group
                        label="Filter:"
                        label-align-md="right"
                        label-cols-sm="2"
                        label-size="lg"
                        label-for="filterInput"
                        class="mt-2"
                    >
                        <b-input-group size="sm">
                            <b-form-input
                                v-model="filter"
                                type="search"
                                id="filterInput"
                                placeholder="Type to Search"
                            ></b-form-input>
                            <b-input-group-append>
                                <b-button
                                    :disabled="!filter"
                                    @click="filter = ''"
                                    >Clear</b-button
                                >
                            </b-input-group-append>
                        </b-input-group>
                    </b-form-group>
                </div>
                <div class="col-5"></div>
                <div class="col-1">
                    <div
                        class="d-sm-flex align-items-center justify-content-between mt-3 "
                    >
                        <a
                            href="#"
                            class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm "
                            ><i
                                class="fas fa-plus-circle fa-sm text-white-50"
                            ></i>
                            Add
                        </a>
                    </div>
                </div>
            </div>
            <!-- Table -->
            <div class="col-12 mt-0">
                <b-table
                    :items="items"
                    :fields="fields"
                    :current-page="currentPage"
                    :per-page="perPage"
                    :filter="filter"
                    :filter-included-fields="filterOn"
                    @filtered="onFiltered"
                >
                    <template #cell(action)>
                        <b-button
                            size="sm"
                            class="mr-2 btn-success text-white"
                            @click="info(row.item, row.index, $event.target)"
                        >
                            Update
                        </b-button>
                        <b-button size="sm" class="mr-2 btn-danger text-white">
                            Delete
                        </b-button>
                    </template>
                </b-table>
            </div>
        </div>
        <!-- End of Table -->
        <div class="card card-shadow mt-1 ">
            <div class="row">
                <div class="col-1 ml-3">
                    <b-form-select
                        v-model="perPage"
                        id="perPageSelect"
                        size="sm"
                        :options="pageOptions"
                    ></b-form-select>
                </div>
                <div class="col-4"></div>
                <div class="col-6  ">
                    <b-pagination
                        v-model="currentPage"
                        :total-rows="totalRows"
                        :per-page="perPage"
                        align="fill"
                        size="sm"
                        class="my-0"
                    ></b-pagination>
                </div>
            </div>
        </div>
        <b-modal
            :id="infoModal.id"
            :title="infoModal.title"
            ok-only
            @hide="resetInfoModal"
        >
            <pre>{{ infoModal.content }}</pre>
        </b-modal>
    </div>
</template>

<script>
export default {
    props: [],
    data() {
        return {
            fields: [
                "company_name",
                "contact_person",
                "email",
                "contact_no",
                "action",
               
            ],
            items: [
                {
                    company_name: "Kereantine Corp",
                    contact_person: "Larsen Shaw",
                    email: "kereantine@demo.com",
                    contact_no: "0123456789"
                },
                {
                    company_name: "BC Electro",
                    contact_person: "Geneva Shaw",
                    email: "bcelectro@demo.com",
                    contact_no: "0124578789"
                },
                {
                    company_name: "Jamiees Cookie",
                    contact_person: "Jami Carney",
                    email: "jamiees@demo.com",
                    contact_no: "0197476489"
                }
            ],
            totalRows: 1,
            currentPage: 1,
            perPage: 5,
            pageOptions: [5, 10, 15, { value: 100, text: "Show a lot" }],
            filter: null,
            filterOn: [],
            infoModal: {
                id: "info-modal",
                title: "",
                content: ""
            }
        };
    },
    mounted() {
        // Set the initial number of items
        this.totalRows = this.items.length;
    },
    methods: {
        info(item, index, button) {
            this.infoModal.title = `Row index: ${index}`;
            this.infoModal.content = JSON.stringify(item, null, 2);
            this.$root.$emit("bv::show::modal", this.infoModal.id, button);
        },
        resetInfoModal() {
            this.infoModal.title = "";
            this.infoModal.content = "";
        },
        onFiltered(filteredItems) {
            // Trigger pagination to update the number of buttons/pages due to filtering
            this.totalRows = filteredItems.length;
            this.currentPage = 1;
        }
    }
};
</script>
