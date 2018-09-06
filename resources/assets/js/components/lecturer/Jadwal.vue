<template>
    <div class="scroll-out">
        <div class="floor jadwal">
            <div class="section-content">
                <div class="section-title pb30">
                    <h2>Jadwal</h2>
                </div>
                <select name="" id="" class="node-answer-input">
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                </select>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Kuliah</th>
                            <th>Dosen</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Konsep Jaringan</td>
                            <td>Rianto, MT</td>
                            <td class="text-center"><i class="ti ti-check text-info"></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Desain grafis</td>
                            <td>Rianto, MT</td>
                            <td  class="text-center">
                                <i class="ti ti-close text-danger"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Konsep Jaringan
                                <span class="badge">telat</span>
                            </td>
                            <td>Rianto, MT</td>
                            <td class="text-center">
                                <i class="ti ti-check text-info"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
