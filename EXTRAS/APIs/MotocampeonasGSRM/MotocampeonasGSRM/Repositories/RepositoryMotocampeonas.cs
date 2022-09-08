using MotocampeonasGSRM.Data;
using MotocampeonasGSRM.Models;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace MotocampeonasGSRM.Repositories
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

