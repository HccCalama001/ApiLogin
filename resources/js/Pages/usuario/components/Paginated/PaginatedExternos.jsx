// /components/Paginated/PaginatedExternos.jsx
import React, { useState } from "react";
import CardRoleExternos from "../Card/CardRoleExternos";

const PaginatedExternos = ({ gruposExternos = [] }) => {
    // Estado para la página actual
    const [currentPage, setCurrentPage] = useState(1);

    // Número de elementos por página
    const itemsPerPage = 6;

    // Calcular los índices para la paginación
    const indexOfLastItem = currentPage * itemsPerPage;
    const indexOfFirstItem = indexOfLastItem - itemsPerPage;

    // Obtener los elementos de la página actual
    const paginatedGroups = gruposExternos.slice(
        indexOfFirstItem,
        indexOfLastItem
    );

    // Calcular el número total de páginas
    const totalPages = Math.ceil(gruposExternos.length / itemsPerPage);

    // Función para cambiar de página
    const handlePageChange = (pageNumber) => {
        setCurrentPage(pageNumber);
    };

    return (
        <section>
            {gruposExternos.length > 0 ? (
                <>
                    {/* Grid de tarjetas */}
                    <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        {paginatedGroups.map((grupo, index) => (
                            <CardRoleExternos
                                key={index}
                                grupoExterno={grupo}
                            />
                        ))}
                    </div>

                    {/* Paginación */}
                    <div className="flex justify-center items-center mt-6 space-x-2">
                        {Array.from({ length: totalPages }, (_, idx) => {
                            const pageNum = idx + 1;
                            const isActive = currentPage === pageNum;

                            return (
                                <button
                                    key={pageNum}
                                    onClick={() => handlePageChange(pageNum)}
                                    aria-label={`Ir a la página ${pageNum}`}
                                    className={`px-4 py-2 border rounded 
                    transition-colors duration-150 focus:outline-none
                    ${
                        isActive
                            ? "bg-teal-600 text-white border-teal-600"
                            : "bg-gray-200 text-gray-800 hover:bg-gray-300"
                    }`}
                                >
                                    {pageNum}
                                </button>
                            );
                        })}
                    </div>
                </>
            ) : (
                <p className="text-gray-500 italic">
                    No hay sistemas externos asociados.
                </p>
            )}
        </section>
    );
};

export default PaginatedExternos;