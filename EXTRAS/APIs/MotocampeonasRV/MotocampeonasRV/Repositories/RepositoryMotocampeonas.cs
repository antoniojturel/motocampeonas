using MotocampeonasRV.Data;
using MotocampeonasRV.Models;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace MotocampeonasRV.Repositories
{
    public class RepositoryMotocampeonas
    {
        MotocampeonasContext context;

        public RepositoryMotocampeonas(MotocampeonasContext context)
        {
            this.context = context;
        }

        public List<Motocampeona> GetMotocampeonas()
        {
            return this.context.Motocampeonas.ToList();
        }
    }
}

